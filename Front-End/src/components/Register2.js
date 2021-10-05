import React, { useState, useEffect } from 'react'
import Footer from '../commons/Footer';
import { Link } from 'react-router-dom';
import axios from 'axios';
import { useHistory } from "react-router";

import RegisterImage from '../img/home/Fresh Folk - Gathering(1).png'
import GoogleLogin from 'react-google-login'
import FacebookLogin from 'react-facebook-login/dist/facebook-login-render-props'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEye, faEyeSlash } from '@fortawesome/free-solid-svg-icons';

const KOKORUNS_BASE_URL = process.env.REACT_APP_KOKORUNS_BASE_URL;
const clientID = process.env.REACT_APP_GOOGLE_CLIENT_ID
const facebookAppID = process.env.REACT_APP_FACEBOOK_APP_ID


const Register2 = () => {
    const [input, setInput] = useState("")
    const [acceptTerms, setAcceptTerms] = useState(false)
    const [password1, setPassword1] = useState("")
    const [password2, setPassword2] = useState("")
    const [errorMsg, setErrorMsg] = useState("")

    const [showPassword, setShowPassword] = useState({
        password: false,
        password2: false
    })
    const history = useHistory()

    

    const onClickShowPassword = (e) => {
        if (document.querySelector("#password") === e.target || document.querySelector("#password").contains(e.target) === true) {
            setShowPassword({ ...showPassword, password: !showPassword.password })
        } else {
            setShowPassword({ ...showPassword, password2: !showPassword.password2 })
        }
    }

    const onChangeInput = (e) => {
        console.log(e)
        const { name, value } = e.target;
        setInput(value)

        if(e.target.value.length === 6) {
            console.log(e)
            //const body_test = document.querySelector("body") 
            e.target.style.borderColor = "rgb(223, 71, 89)";
            e.target.style.boxShadow = "rgba(223, 71, 89, .25)"
        }else  if (e.target.value.length < 6){
            e.target.style.borderColor = "#80bdff";
            e.target.style.boxShadow = "0 0 0 0.2rem rgb(0 123 255 / 25%)"
        }
    }

    const onChangePassword1 = (e) => {
        const { name, value } = e.target;
        setPassword1(value)
    }

    const onChangePassword2 = (e) => {
        const { name, value } = e.target;
        setPassword2(value)
    }

    const onCheckedTerms = (e) => {
        setAcceptTerms(!acceptTerms)
    }
    const onCloseErrMsg = () => {
        setErrorMsg("")
    }

    const componentClicked = (e) => { }

    const responseGoogle = (response) => {
        if (!response.profileObj) { return }
        const googleId = response.profileObj.googleId
        const email = response.profileObj.email
        const name = response.profileObj.name
        const headers = {
            "Content-Type": "application/json"
        }
        const data = {
            email: email,
            name: name,
            id: googleId,
            type: "google"
        }
        axios.post(`${KOKORUNS_BASE_URL}/login`, data, {
            headers: headers
        })
            .then(res => {
                localStorage.setItem('access_token', response.data.token);
                history.push("/profile-setup")
            }).catch(err => {
                console.error(err.response)
                setErrorMsg(err.response.data.message)
            })
    }
    const responseFacebook = (e) => {

    }

    const onFormSubmit = (e) => {
        e.preventDefault()
        //console.log({input, password1, password2})

        //regex
        const min6 = /^.{6,}$/;
        const check_email = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        const check_number = /^(?:0\d{10}|[+]?[234]\d{12})$/


        //check if terms and conditions are selected 
        if (!acceptTerms) {
            setErrorMsg("Please accept our Terms and conditions")
            return;
        }
        //check if passwords match and if they are more than 6 digits
        if (password1 !== password2) {
            setErrorMsg("Passwords do not match")
            return;
        }
        if (min6.test(password1) === false) {
            setErrorMsg("Password not up to 6 digits")
            return;
        }
        //set header
        const headers = {
            "Content-Type": "application/json"
        }

        //check if input is email or number
        if (check_email.test(String(input).toLowerCase()) === true) {
            var data = {
                email: input,
                password: password1,
                type: "email"
            };
            //Register User
            axios.post(`${KOKORUNS_BASE_URL}/register`, data, { headers: headers })
                .then((response) => {
                    localStorage.setItem('access_token', response.data.token);
                    history.push({
                        pathname: '/register-success',
                        state: {
                            type: "email",
                            user: input
                        }
                    })
                    console.log(response);
                }).catch(error => {
                    if (!error.response) { return }
                    console.log(error.response.data.message);
                    setErrorMsg(error.response.data.message);
                });
        } else if (check_number.test(input) === true) {
            //change number to +234 format
            if (input[0] === "0") {
                var number = input.replace("0", "+234")
                var data = {
                    phone: number,
                    password: password1,
                    type: "phone"
                };
            } else if (input[0] === "2") {
                var number = input.replace("2", "+2")
                var data = {
                    phone: number,
                    password: password1,
                    type: "phone"
                };
            } else {
                data = {
                    phone: input,
                    password: password1,
                    type: "phone"
                };
            }

            //Register User
            axios.post(`${KOKORUNS_BASE_URL}/register`, data, { headers: headers })
                .then((response) => {
                    localStorage.setItem('access_token', response.data.token);
                    history.push({
                        pathname: '/registersuccess',
                        state: {
                            type: "phone",
                            user: input
                        }
                    })
                    console.log(response);
                }).catch(error => {
                    if (!error.response) { return }
                    console.log(error.response.data.message);
                    setErrorMsg(error.response.data.message);
                });
        } else {
            setErrorMsg("Please Enter Correct Email or Number")
            return;
        }
    }


    return (
        <div>
            <header style={{ position: "initial" }} className="container-fluid bg-white">
                <nav className="p-2">
                    <a className="navbar-brand" href="/">
                        <img
                            src="assets/Images/Header%20and%20Footer/Logo.png"
                            alt="Logo"
                            style={{
                                width: 200
                            }} />
                    </a>
                </nav>
            </header>

            <div className="container p-4 mx-auto " style={{ margin: '2rem 0' }}>
                <div className="row bg-white">
                    <div className="col-12 col-md-6">
                        <div className="pt-4 pl-4 pr-4">
                            <h2 className="mb-4 text-center">Create A User Account</h2>
                            <form className="needs-validation" onSubmit={onFormSubmit} noValidate>
                                <div className="form-group">
                                    <input className="form-control rounded-0" type="text"
                                        value={input}
                                        onChange={onChangeInput}
                                        id="user_email_or_phone_number"
                                        name="user_email_or_phone_number"
                                        placeholder="Enter Email or Phone Number"
                                        autoComplete="off"
                                        required />
                                </div>
                                <div className="form-group d-flex align-items-center">
                                    <input className="form-control rounded-0"
                                        type={showPassword.password ? "text" : "password"}
                                        placeholder="Enter password"
                                        value={password1}
                                        onChange={onChangePassword1}
                                        id="myPassword"
                                        name="password"
                                        autoComplete="off"
                                        required />
                                    <FontAwesomeIcon id="password" onClick={onClickShowPassword} style={{ marginLeft: "-30px", color: "#CED4DA", cursor: "pointer" }} icon={showPassword.password ? faEyeSlash : faEye} />
                                </div>
                                <div className="form-group d-flex align-items-center">
                                    <input className="form-control rounded-0"
                                        type={showPassword.password2 ? "text" : "password"}
                                        placeholder="Retype password"
                                        id="myConfirmPassword"
                                        value={password2}
                                        onChange={onChangePassword2}
                                        name="password2"
                                        autoComplete="off"
                                        required />
                                    <FontAwesomeIcon id="password2" onClick={onClickShowPassword} style={{ marginLeft: "-30px", color: "#CED4DA", cursor: "pointer" }} icon={showPassword.password2 ? faEyeSlash : faEye} />
                                </div>
                                {errorMsg !== "" ?
                                    <div className="alert alert-warning alert-dismissible fade show" role="alert">
                                        {errorMsg}
                                        <button onClick={onCloseErrMsg} type="button" className="close" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    : null}
                                <div class=" form-check my-1">
                                    <input onChange = {onCheckedTerms} checked = {acceptTerms} type="checkbox" class="form-check-input" id="acceptTerms" />
                                    <label  class="form-check-label" for="acceptTerms">I agree to the <Link to = "/user-agreement">User Agreement and Privacy Policy</Link> </label>
                                </div>
                                <div className="form-group">
                                    <button
                                        type="submit"
                                        className="btn btn-block rounded-0 text-white w-100 mx-auto"
                                        style={{
                                            background: 'red'
                                        }}
                                        id="submit">Register</button>
                                </div>
                            </form>
                            <h6 style={{ fontSize: "14px" }} className="text-center py-3">or</h6>
                            <div className="row">
                                <div className="col">
                                    <GoogleLogin
                                        clientId={clientID}
                                        render={renderProps => (
                                            <button button onClick={renderProps.onClick} disabled={renderProps.disabled} type="button" className="btn btn-white btn-block rounded-0 border w-100">
                                                <img className="float-left" src="assets/Images/Index/Google%20Logo.png" alt="Register Google"
                                                    width="5%"
                                                />
                                                <span className="text-primary">
                                                    Continue with Google</span>
                                            </button>
                                        )}
                                        buttonText="Login"
                                        onSuccess={responseGoogle}
                                        onFailure={responseGoogle}
                                        cookiePolicy={'single_host_origin'}
                                    />

                                    <FacebookLogin
                                        appId={facebookAppID}
                                        autoLoad={true}
                                        fields="name,email,picture"
                                        render={renderProps => (
                                            <button type="button" className=" d-none btn btn-block rounded-0 border w-100"
                                                style={{
                                                    background: '#3C5A99'
                                                }}
                                                onClick={renderProps.onClick}>
                                                <img className="float-left" src="assets/Images/Index/Facebook%20Logo.png" alt="Register with Facebook"
                                                    width="5%" />
                                                <span className="text-white">
                                                    Continue with Facebook</span>
                                            </button>
                                        )}
                                        onClick={componentClicked}
                                        callback={responseFacebook}
                                    />

                                    <button
                                        type="button"
                                        className=" d-none btn btn-dark btn-block rounded-0 border w-100"
                                        style={{
                                            background: '#000'
                                        }}>
                                        <img
                                            className="float-left"
                                            src="data:image/png;base64,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"
                                            alt="Register with Apple"
                                            width="5%" />
                                        <span className="text-white">
                                            Sign Up with Apple</span>
                                    </button>
                                </div>
                            </div>
                            <p className="text-center mt-2">Already have a kokoruns account?
                                <Link style={{ fontSize: "14px" }} className="ml-1" to={"/login"}>
                                    Sign in</Link>
                            </p>
                        </div>
                    </div>
                    <div className="col-12 col-md-6 h-full relative p-0 "
                        style={{ minHeight: "504px" }}>
                        <img src={RegisterImage} alt="" className=" img-fluid "
                            style={{
                                position: "absolute",
                                top: "50%",
                                transform: "translateY(-50%)"
                            }} />
                        <div
                            className=" register-text-container"
                            style={{
                                position: "absolute",
                                top: "0",
                                display: "flex",
                                flexDirection: "column",
                                paddingLeft: "20px",
                                justifyContent: "space-around",
                                width: '100%',
                                height: '100%',
                                backgroundColor: 'rgba(60,90,153,0.8)'
                            }}>

                            <h2 className=" text-white"> - Showcase Your Portfolio</h2>
                            <h2 className=" text-white">- Connect With Employers</h2>
                            <h2 className=" text-white">- Brand & Showcase Your Company/School/Association </h2>
                            <h2 className=" text-white">- Find Other Users</h2>
                            <h2 className=" text-white">- Broadcast Your Events</h2>
                            <h2 className=" text-white">- Join Teams</h2>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    )
}

export default Register2
