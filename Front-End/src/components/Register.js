import React, { Component } from 'react';
import Footer from '../commons/Footer';
import { Link } from 'react-router-dom';
import axios from 'axios';

import RegisterImage from '../img/home/Fresh Folk - Gathering(1).png'


import GoogleLogin from 'react-google-login'
import FacebookLogin from 'react-facebook-login/dist/facebook-login-render-props'


const dotenv = require('dotenv');
dotenv.config();
const KOKORUNS_BASE_URL = process.env.REACT_APP_KOKORUNS_BASE_URL;
const clientID = process.env.REACT_APP_GOOGLE_CLIENT_ID
const facebookAppID = process.env.REACT_APP_FACEBOOK_APP_ID

export class Register extends Component {

    constructor(props) {
        super(props);

        this.state = {
            user_email_or_phone_number: '',
            password: '',
            password2: '',
            isLoading: false,
            errorMsg: ""
        }

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
        this.responseGoogle = this.responseGoogle.bind(this);
        this.responseFacebook = this.responseFacebook.bind(this);
        //    this.validatePassword = this.validatePassword.bind(this);


    }

    handleChange(e) {
        this.setState({
            [e.target.name]: e.target.value
        });
        if (this.state.password.value !== this.state.password2.value) {
            //confirm_password.setCustomValidity("Passwords Don't Match");
            
            this.setState({ errorMsg: "Passwords don't Match" })

        } else {
            // confirm_password.setCustomValidity('');
        }
    }

    handleSubmit(e) {
        // Form submission logic
        e.preventDefault();
        this.setState({ isLoading: true });

        this.setState({
            [e.target.name]: e.target.value
        });

        const headers = {
            "Content-Type": "application/json"
        }

        const check_email = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        const check_number = /^(?:0\d{10}|[+]?[234]\d{12})$/

        if (check_email.test(String(this.state.user_email_or_phone_number).toLowerCase()) === true) {
            const data = {
                email: this.state.user_email_or_phone_number,
                password: this.state.password,
                type : "email"
            };
            //console.log("email")
            axios.post(`${KOKORUNS_BASE_URL}/register`, data, { headers: headers })
                .then((response) => {
                    localStorage.setItem('access_token', response.data.token);
                    this.props.history.push({
                        pathname: '/registersuccess',
                        state: {
                            type: 'email',
                            email: this.state.user_email_or_phone_number
                        }
                    })
                    console.log(response);

                }).catch(error => {
                    console.log(error.response.data.message);
                    this.setState({ errorMsg: error.response.data.message })
                });
        } else if (check_number.test(this.state.user_email_or_phone_number) === true) {
            const data = {
                phone: this.state.user_email_or_phone_number,
                password: this.state.password,
                type : "phone"
            };
            axios.post(KOKORUNS_BASE_URL + `/register`, data, { headers: headers })
                .then(res => {
                    console.log(res.data)
                    localStorage.setItem('access_token', res.data.token);
                    this.props.history.push({
                        pathname: '/registersuccess',
                        state: {
                            type: 'number',
                            number: data.email
                        }
                    })
                }).catch(error => {
                    console.log(error.response.data.message);
                    this.setState({ errorMsg: error.response.data.message })
                });
            //console.log("number")
        } else {
            alert("please enter email or number")
        }
        //console.log(data);
    }

    handleKeyUp(e) {
        //console.log(e.target.value);
        axios.get(`http://bk.kokoruns.com/api / isregistered `, e.target.value)
            .then((response) => {
                this.props.history.push("/registersuccess");
                console.log(response);
            }).catch(error => {
                console.log(error.response.data.message);
                this.setState({ errorMsg: error.response.data.message })
            });
    }

    responseGoogle = (response) => {
        console.log(response)
        if (response.profileObj) {
            var email = response.profileObj.email
            var lastName = response.profileObj.familyName
            var firstName = response.profileObj.familyName
            var password = response.profileObj.googleId
            const data = { email, password };
            const headers = {
                "Content-Type": "application/json"
            }
            axios.post(KOKORUNS_BASE_URL + `/register`, data, { headers: headers })
                //axios.post(`http://127.0.0.1:8000/api/register`, data, {headers: headers})
                .then((response) => {
                    this.props.history.push({
                        pathname: '/profile-setup',
                        state: {
                            type: 'email',
                            email: email
                        }
                    })
                    console.log(response);

                }).catch(error => {
                    console.log(error.response.data.message);
                    this.setState({ errorMsg: error.response.data.message })
                });
        } else {
            //console.log(error.response.msg);
            this.setState({ errorMsg: "Error Connecting with Google" })
        }
        //console.log({ email, lastName, firstName, password })
    }

    responseFacebook = (response) => {
        console.log(response);
    }

    componentDidMount() { }

    render() {
        return (
            <div>
                <header style = {{position : "initial"}} className="container-fluid bg-white">
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
                                <h2 className="mb-3">Create A User Account</h2>
                                <form className="needs-validation" onSubmit={this.handleSubmit} noValidate>
                                    <div className="form-group">
                                        <input className="form-control rounded-0" type="text"
                                            value={this.state.user_email_or_phone_number}
                                            onChange={this.handleChange}
                                            id="user_email_or_phone_number"
                                            name="user_email_or_phone_number"
                                            placeholder="Enter Email or Phone Number"
                                            autoComplete="off"
                                            required />
                                    </div>
                                    <div className="form-group">
                                        <input type="password" className="form-control rounded-0"
                                            placeholder="Enter password"
                                            value={this.state.password}
                                            onChange={this.handleChange}
                                            id="myPassword"
                                            name="password"
                                            autoComplete="off"
                                            required />
                                    </div>
                                    <div className="form-group">
                                        <input className="form-control rounded-0"
                                            type="password"
                                            placeholder="Retype password"
                                            id="myConfirmPassword"
                                            value={this.state.password2}
                                            onChange={this.handleChange}
                                            name="password2"
                                            autoComplete="off"
                                            required />
                                    </div>
                                    {this.state.errorMsg !== "" ?
                                        <div className="alert alert-warning alert-dismissible fade show" role="alert">
                                            {this.state.errorMsg}
                                            <button type="button" className="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        : null}

                                    <div className="form-group">
                                        <button
                                            type="submit"
                                            className="btn btn-block rounded-0 text-white w-50 mx-auto"
                                            style={{
                                                background: 'red'
                                            }}
                                            id="submit">Register</button>
                                    </div>
                                </form>
                                <h6 className="text-center text-primary">OR</h6>
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
                                            onSuccess={this.responseGoogle}
                                            onFailure={this.responseGoogle}
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
                                            onClick={this.componentClicked}
                                            callback={this.responseFacebook}
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
                                    <Link className = "ml-1" to={"/login"}>
                                        Sign in</Link>
                                </p>
                            </div>
                        </div>
                        <div className="col-12 col-md-6 h-full relative p-0 "
                        style = {{minHeight : "504px"}}>
                            <img src={RegisterImage} alt="" className=" img-fluid " 
                            style = {{
                                position : "absolute",
                                top: "50%",
                                transform : "translateY(-50%)"
                            }}/>
                            <div
                                className=" register-text-container"
                                style={{
                                    position : "absolute",
                                    top: "0",
                                    display : "flex",
                                    flexDirection : "column",
                                    paddingLeft : "20px",
                                    justifyContent :"space-around",
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

                <Footer />

            </div>

        )
    }
}

export default Register