import React, { useState } from 'react'
import { useHistory } from 'react-router';
import { Link } from 'react-router-dom';
import Footer from '../commons/Footer';
import axios from 'axios';
import jwt from 'jwt-decode'; // import dependency
import GoogleLogin from 'react-google-login'
import FacebookLogin from 'react-facebook-login/dist/facebook-login-render-props'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faEye } from '@fortawesome/free-regular-svg-icons';
import { faEyeSlash } from '@fortawesome/free-solid-svg-icons';

const dotenv = require('dotenv');
dotenv.config();
const KOKORUNS_BASE_URL = process.env.REACT_APP_KOKORUNS_BASE_URL;
const clientID = process.env.REACT_APP_GOOGLE_CLIENT_ID
const facebookAppID = process.env.REACT_APP_FACEBOOK_APP_ID



const Login2 = () => {
    const history = useHistory()
    const [input, setInput] = useState("")
    const [password, setPassword] = useState("")
    const [errorMsg, setErrorMsg] = useState("")
    const [loading, setLoading] = useState(false)
    const [showPassword, setShowPassword] = useState({
        password : false
    })
    
    const onClickShowPassword = (e) => {
        setShowPassword({password : !showPassword.password})
    }

    const onChangeInput = (e) => {
        const {name, value} = e.target
        setInput(value)
    }

    const onChangePassword = (e) => {
        const {name, value} = e.target
        setPassword(value)
    }

    const onClickClose = () => {
        setErrorMsg("")
    }

    const responseGoogle = (response) => {
        if(!response.profileObj) {return}
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
                localStorage.setItem('access_token', res.data.token);
                if(response.data.user.active === 0) {
                    history.push({
                        pathname: "/profile-setup",
                        state : {
                            email : response.profileObj.email,
                            firstName : response.profileObj.firstName,
                            lastName : response.profileObj.lastName
                        }
                    })
                }else {
                    history.push("/user-dashboard")
                }
                
            }).catch(err => {
                console.error(err.response)
                setErrorMsg(err.response.data.message)
            })
    }

    const onClickLogin = (e) => {
        e.preventDefault();
        //regex
        const check_email = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        const check_number = /^(?:0\d{10}|[+]?[234]\d{12})$/
   
        //start spinner
        setLoading(true)

        //set header
        const headers = {
            "Content-Type": "application/json"
        }

        //check if input is email or number

        //if email
        if (check_email.test(String(input).toLowerCase()) === true) { 
            var data = {
                "email": input,
                "password": password,
                "type": "email"
            };
            //Login User
            axios.post(`${KOKORUNS_BASE_URL}/login`, data, { headers: headers })
            .then((response) => {
                localStorage.setItem('access_token', response.data.access_token);
                history.push({
                    pathname: '/user-dashboard',
                    state: {
                        type: "email",
                        user: input
                    }
                })
                setLoading(false)
            }).catch(error => {
                setLoading(false)
                if(!error.response){return}
                setErrorMsg(error.response.data.message);    
            });

            //if phone
        } else if (check_number.test(input) === true) {
            //change number to +234 format
            if(input[0] === "0") {
                var number = input.replace("0", "+234")
                var data =  {
                    "phone": number,
                    "password": password,
                    "type": "phone"
                };
            }else if(input[0] === "2") {
                var number  = input.replace("2", "+2")
                var data = {
                    phone: number,
                    password: password,
                    type: "phone"
                };
            }else {
                var data =  {
                    phone: input,
                    password: password,
                    type: "phone"
                };
            } 

            //Login User
            axios.post(`${KOKORUNS_BASE_URL}/login`, data, { headers: headers })
            .then((response) => {
                localStorage.setItem('access_token', response.data.token);
                history.push({
                    pathname: '/user-dashboard',
                    state: {
                        type: "phone",
                        user: input
                    }
                })
                console.log(response);
                setLoading(false)
            }).catch(error => {
                setLoading(false)
                if(!error.response){return}
                setErrorMsg(error.response.data.message);
            });     
        } else {
            setErrorMsg("Please Enter Correct Email or Number")
            return;
        } 
    }

    
    const componentClicked = () => {}
    const responseFacebook = () => {}
    
    return (
        <>
            <header style={{ position: "initial" }} className="container-fluid bg-white">
                <nav className="p-2">
                    <a className="navbar-brand" href="/">
                        <img src="assets/Images/Header%20and%20Footer/Logo.png" alt="Logo" style={{ width: 200 }} />
                    </a>
                </nav>
            </header>

            <div className="container row my-5 mx-auto" >
                <div className="bg-white col-sm-12 col-md-6 mx-auto">
                    <div className="">
                        <div className="pt-4 pl-4 pr-4">
                            <h2 className="mb-4 text-center">Login Into Your Account</h2>
                            <form onSubmit={onClickLogin} noValidate>
                                <div className="form-group ">
                                    <input type="text" className="form-control rounded-0" value={input} onChange={onChangeInput} id="user_email_or_phone_number" name="user_email_or_phone_number" placeholder="Enter Email or Phone Number" autoComplete="off" required />
                                </div>
                                <div className="form-group d-flex align-items-center">
                                    <input type={ showPassword.password ? "text" : "password"} className="password form-control rounded-0" value={password} onChange={onChangePassword} placeholder="Enter password" id="password" name="password" autoComplete="off" required />
                                    <FontAwesomeIcon id = "password" onClick = {onClickShowPassword} style = {{marginLeft : "-30px", color: "#CED4DA", cursor : "pointer"}} icon = {showPassword.password ? faEyeSlash : faEye} />
                                </div>
                                {errorMsg !== "" ?
                                    <div className="alert alert-warning alert-dismissible fade show" role="alert">
                                        {errorMsg}
                                        <button onClick = {onClickClose} type="button" className="close"  aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    : null}
                                <div className="form-group">
                                    {loading ? <button type="submit" className="btn btn-block rounded-0 text-white w-100 mx-auto disabled" style={{ background: 'red' }} id="submit">Login <i className="fa fa-spinner fa-spin"></i></button> 
                                    : <button type="submit" className="btn btn-block rounded-0 text-white w-100 mx-auto" style={{ background: 'red' }} id="submit">Login</button>}
                                </div>
                            </form>
                            <h5 style = {{fontSize : "14px"}} className="text-center py-3">or</h5>
                            <div className="row">
                                <div className="col">
                                    <GoogleLogin
                                        clientId={clientID}
                                        render={renderProps => (
                                            <button button onClick={renderProps.onClick} disabled={renderProps.disabled} type="button" className="btn btn-white btn-block rounded-0 border w-100">
                                                <img className="float-left" src="assets/Images/Index/Google%20Logo.png" alt="Register Google"
                                                    width="5%"
                                                />
                                                <span className="text-primary">Continue with Google</span>
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
                                            <button type="button" className="d-none btn btn-block rounded-0 border w-100"
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
                                    <button type="button" className=" d-none btn btn-dark btn-block rounded-0 border w-100" style={{ background: '#000' }}>
                                        <img alt= "" className="float-left" src="data:image/png;base64,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" width="5%" /> <span className="text-white"> Sign Up with Apple</span>
                                    </button>
                                </div>
                            </div>
                            <p className="text-center mt-2 mb-1">Dont have a kokoruns account?
                                <Link style = {{fontSize : "14px"}} className="ml-1" to={"/register"}>  Register</Link>
                            </p>
                            <p className="text-center">
                                <Link style = {{fontSize : "14px"}} to={"/forgot"}>  Forgot Password?</Link>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Login2
