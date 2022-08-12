import React, { Component } from 'react'
import Footer from '../commons/Footer'
import axios from 'axios'

const KOKORUNS_BASE_URL = process.env.REACT_APP_KOKORUNS_BASE_URL;

export class RegisterSuccess extends Component {
    constructor(props) {
        super(props);

        this.state = {
            emailToken: "",
            OTPToken: ""
        }

        this.onCheckEmailToken = this.onCheckEmailToken.bind(this)
        this.onGetNewEmailToken = this.onGetNewEmailToken.bind(this)
        this.onCheckOTPToken = this.onCheckOTPToken.bind(this)
        this.onGetNewOTPToken = this.onGetNewOTPToken.bind(this)
    }

    onChangeEmailToken(e) {
        const { name, value } = e.target
        this.setState({ emailToken: value })
    }

    onChangeOTPToken(e) {
        const { name, value } = e.target
        this.setState({ OTPToken: value })
    }

    onCheckEmailToken(e) {
        const headers = {
            "Content-Type": "application/json"
        }
        e.preventDefault()
        console.log(this.props.location.state)
        axios.post(KOKORUNS_BASE_URL + "/confirm_email", { token: "NDgzNTI1MzY1NS0x" }, {
            headers: headers
        })
            .then(res => {
                console.log(res.data)
                alert(res.data.message)
                setTimeout(() => {
                    this.history.push("/profile-setup")
                }, 5000);

            })
            .catch(err => {
                console.log(err.response.data.message)
            })

    }

    onCheckOTPToken(e) {
        const headers = {
            "Content-Type": "application/json"
        }
        e.preventDefault()
        console.log(this.props.location.state)
        axios.post(KOKORUNS_BASE_URL + "/confirm_otp", { token: "NDgzNTI1MzY1NS0x" }, {
            headers: headers
        })
            .then(res => {
                console.log(res.data)
                alert(res.data.message)
                setTimeout(() => {
                    this.history.push("/profile-setup")
                }, 5000);

            })
            .catch(err => {
                console.log(err.response.data.message)
            })

    }

    onGetNewEmailToken(e) {
        const headers = {
            "Content-Type": "application/json"
        }
        axios.post(KOKORUNS_BASE_URL + "/send_email", { email: this.props.email }, { headers: headers })
            .then(res => {
                console.log(res.data)
                alert(res.data.message)
            })
            .catch(err => {
                console.error(err.response.data)
                alert(err.response.data.message)
            })
    }

    onGetNewOTPToken(e) {
        const headers = {
            "Content-Type": "application/json"
        }
        axios.post(KOKORUNS_BASE_URL + "/send_otp", { email: this.props.number }, { headers: headers })
            .then(res => {
                console.log(res.data)
                alert(res.data.message)
            })
            .catch(err => {
                console.error(err.response.data)
                alert(err.response.data.message)
            })

    }

    componentDidMount() {
        console.log(this.props.location.state.type)
        if (this.props.location.state.type === "email") {
            var email = this.props.location.state.email
            console.log(email)
            const headers = {
                "Content-Type": "application/json"
              }
            axios.post(KOKORUNS_BASE_URL +`/send_email`,{"email" : email}, { headers: headers })
                //axios.post(`http://127.0.0.1:8000/api/register`, data, {headers: headers})
                .then((response) => {
                    this.setState({success : response.data.message})
                }).catch(error => {
                    console.log(error.response.data.message);
                    this.setState({ errorMsg: error.response.data.message });
                });
        } else {
            var number = this.props.location.state.email
            const headers = {
                "Content-Type": "application/json"
              }
            axios.post(KOKORUNS_BASE_URL +`/send_otp`, number, { headers: headers })
                //axios.post(`http://127.0.0.1:8000/api/register`, data, {headers: headers})
                .then((response) => {
                    this.setState({success : response.data.message})
                }).catch(error => {
                    console.log(error.response.data.message);
                    this.setState({ errorMsg: error.response.data.message });
                });
        }
}

render() {
    if (this.props.location.state.type === "email") {
        return (
            <div style={{ display: "flex", flexDirection: "column", justifyContent: "space-between", minHeight: "100vh" }} className="">
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
                <div style={{ margin: "4rem" }} className=" mt-5 text-center">
                    <h4 className=" lead">
                        Your Registration is successful. An Email verification has been sent to your email
                        Enter the digits to complete your verification.
                    </h4>

                    <form onSubmit={this.onCheckEmailToken}>
                        <input onChange={this.onChangeEmailToken} className=" mt-5 form-control mx-auto" style={{ width: "15rem" }} type="text" name="email_token" />
                        <button className=" mt-5 btn btn-info d-block mx-auto" type="submit">Check Token</button>
                        <p onClick={this.onGetNewEmailToken} className=" h6 mt-2" style={{ cursor: "pointer" }}>Can't See token click here to resend </p>
                    </form>
                </div>

                <Footer />

            </div>

        )
    } else {
        return (
            <div style={{ display: "flex", flexDirection: "column", justifyContent: "space-between", minHeight: "100vh" }} className="">
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
                <div style={{ margin: "4rem" }} className=" mt-5 text-center">
                    <h4 className=" lead">
                        Your Registration is successful. An OTP verification has been sent to your Number
                        Enter the digits to complete your verification.
                    </h4>

                    <form onSubmit={this.onCheckOTPToken}>
                        <input onChange={this.onChangeOTPToken} className=" mt-5 form-control mx-auto" style={{ width: "15rem" }} type="text" name="email_token" />
                        <button className=" mt-5 btn btn-info d-block mx-auto" type="submit">Check Token</button>
                        <p onClick={this.onGetNewOTPToken} className=" h6 mt-2" style={{ cursor: "pointer" }}>Can't See token click here to resend </p>
                    </form>
                </div>

                <Footer />

            </div>

        )
    }

}
}

export default RegisterSuccess
