import React, { useEffect, useState } from 'react'
import { useHistory } from 'react-router'
import Footer from '../commons/Footer'
import axios from 'axios'
import { Link } from 'react-router-dom';

const KOKORUNS_BASE_URL = process.env.REACT_APP_KOKORUNS_BASE_URL;

const RegisterSuccess2 = (props) => {
    const history = useHistory()
    let user  = props.location.state.user;
    const [type, setType] = useState("")
    const [msg, setMsg] = useState("")
    const [success, setSuccess] = useState(false)
    const [token, setToken] = useState("")

    useEffect(() => {
        setType(props.location.state.type)
        //set Headers
        const headers = {
            "Content-Type": "application/json"
        }

        //check type and send OTP
        if (type === "email") {
            var email = props.location.state.user
            //var email = myemail
            axios.post(KOKORUNS_BASE_URL + `/send_email`, { "email": email }, { headers: headers })
                .then((response) => {
                    console.log(response.data.message)
                }).catch(error => {
                    //console.log(error.response.data.message);
                    setMsg(error.response.data.message)
                });
        }

        if (type === "phone") {
            var phone = props.location.state.user
            var number;
            if(phone[0] === "0") {
                 number = phone.replace("0", "+234")
            }  else if(phone[0] === "2") {
                 number  = phone.replace("2", "+2")
            } else {
               number  = phone
            }
            console.log(number)
            axios.post(KOKORUNS_BASE_URL + `/send_otp`, { "phone": number }, { headers: headers })
                .then((response) => {
                    console.log(response.data.message)
                }).catch(error => {
                    setMsg(error.response.data.message)
                });
        }
    }, [props.location.state.user, props.location.state.type,  type])


    const onChangeInputFocus = (e) => {
        const input = e.target

        
    }

    const onClickClose = () => {
        setMsg("")
    }

    const onChangeToken = (e) => {
        const { name, value } = e.target

        if(value.length < 6) {
            //const body_test = document.querySelector("body") 
            e.target.style.borderColor = "rgb(223, 71, 89)";
            e.target.style.boxShadow = "0 0 0 0.2rem rgba(223, 71, 89, .25)";
            setToken(value)
        }else  if (value.length === 6){
            e.target.style.borderColor = "#80bdff";
            e.target.style.boxShadow = "0 0 0 0.2rem rgb(0 123 255 / 25%)";
            setToken(value)
        }
    }

    const onClickResend =() => {
        const headers = {
            "Content-Type": "application/json"
        }
        if (type === "email") {
            var email = props.location.state.user
            //var email = myemail
            axios.post(KOKORUNS_BASE_URL + `/send_email`, { "email": email }, { headers: headers })
                .then((response) => {
                    console.log(response.data.message)
                }).catch(error => {
                    //console.log(error.response.data.message);
                    setMsg(error.response.data.message)
                });
        }

        if (type === "phone") {
            var phone = props.location.state.user
            var number;
            if(phone[0] === "0") {
                number = phone.replace("0", "+234")
            }  else if(phone[0] === "2") {
                number  = phone.replace("2", "+2")
            } else {
               number  = phone
            }
            console.log(number)
            axios.post(KOKORUNS_BASE_URL + `/send_otp`, { "phone": number }, { headers: headers })
                .then((response) => {
                    console.log(response.data.message)
                }).catch(error => {
                    setMsg(error.response.data.message)
                });
        }
    }
    const onCheckToken = (e) => {
        e.preventDefault()
        //set Headers
        const headers = {
            "Content-Type": "application/json"
        }

        //if email check otp and redirect to profile setup if correct
        if (type === "email") {
            axios.post(KOKORUNS_BASE_URL + `/confirm_email`, { "token": token }, { headers: headers })
                .then((response) => {
                    setMsg(response.data.message)
                    setSuccess(true)
                    history.push({
                        pathname: '/profile-setup',
                    })
                }).catch(error => {
                    setMsg(error.response.data.message)
                });
        }

        //if number check otp and redirect to profile setup if correct
        if (type === "phone") {
            var phone = props.location.state.user
            var number;
            if(phone[0] === "0") {
                number = phone.replace("0", "+234")
            }  else if(phone[0] === "2") {
                number  = phone.replace("2", "+2")
            } else {
               number  = phone
            }
            axios.post(KOKORUNS_BASE_URL + `/confirm_otp`, {"otp": token, "phone": number}, { headers: headers })
                .then((response) => {
                    setMsg(response.data.message)
                    setSuccess(true)
                    history.push({
                        pathname: '/profile-setup',
                    })
                }).catch(error => {
                    setMsg(error.response.data.message)
                });
        }
    }


    const onGetNewToken = () => {
        //set Headers
        const headers = {
            "Content-Type": "application/json"
        }

        //check type and send OTP
        if (type === "email") {
            var email = props.location.state.user
            axios.post(KOKORUNS_BASE_URL + `/send_email`, { "email": email }, { headers: headers })
                .then((response) => {
                    setMsg(response.data.message)
                    setSuccess(true)
                }).catch(error => {
                    //console.log(error.response.data.message);
                    setMsg(error.response.data.message)
                });
        }

        if (type === "phone") {
            var phone = props.location.state.user
            axios.post(KOKORUNS_BASE_URL + `/send_otp`, { "number": phone }, { headers: headers })
                .then((response) => {
                    setMsg(response.data.message)
                    setSuccess(true)
                }).catch(error => {
                    setMsg(error.response.data.message)
                });
        }
    }

    return (
        <div style={{minHeight: "100vh" }} className="">
            <header style={{ position: "initial" }} className="container-fluid bg-white">
                <nav className="p-2">
                    <Link className="navbar-brand" to = "/">
                        <img
                            src="assets/Images/Header%20and%20Footer/Logo.png"
                            alt="Logo"
                            style={{
                                width: 200
                            }} />
                    </Link>
                </nav>
            </header>
            <div style={{ margin: "4rem" }} className=" mt-5 text-center">
                <h4 className=" lead">
                    {type === "email" ? `Your Registration is successful. An Email verification has been sent to ${user} Enter the digits to complete your verification.`
                        : `Your Registration is successful. An OTP verification has been sent to ${user} Enter the digits to complete your verification.`}

                </h4>

                <form onSubmit={onCheckToken}>
                    <input onChange={onChangeToken}  onFocus = {onChangeInputFocus} className=" mt-5 form-control mx-auto" style={{ width: "15rem" }} type="text" name="token" value={token} />
                    <button className=" mt-5 btn btn-info d-block mx-auto" type="submit">Check Token</button>
                    <p  className=" h6 mt-2" style={{ cursor: "pointer" }}>Can't See token click <a style = {{color: "blue", textDecoration : "underline"}} onClick= {onClickResend}>here </a>to resend </p>
                </form>

                {msg !== "" ?
                    <div className={success ? "alert alert-success alert-dismissible fade show" : "alert alert-danger alert-dismissible fade show"} role="alert">
                        <strong>{msg}</strong>
                        <button onClick={onClickClose} type="button" className="close" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    : null}

            </div>
        </div>

    )

}

export default RegisterSuccess2
