import React, { Component } from 'react'
import { Link } from 'react-router-dom';
import Footer from '../commons/Footer';
import '../css/style.css'

//images
import CompanyPageImg from "../img/home/Dayflow - Coffee Store.png"
import AssociationPageImg from "../img/home/Humaaans - 3 Characters(1).png"
import SchoolPageImg from "../img/home/Family Values - Classroom(5).png"
import FindJobImg from "../img/home/TEAMWORK 6.png"
import HomeBannner from "../img/home/Stuck at Home - Happy Place.png"

export class Home extends Component {
    render() {

        return (
            <div>
                <section className="landing-page-section-1">
                    <header style={{ position: "initial" }} className="header-class-landing-page" id="header-class-landing-page">
                        <div style={{ float: 'left' }}>
                            <a href="index.html">
                                <img className="landing-page-header-logo" src="assets/Images/Header%20and%20Footer/Logo.png" /></a>
                        </div>
                        <div className="landing-page-nav">
                            <a href>About</a><br style={{ lineHeight: '1.3' }} />
                        </div>
                        <div className="landing-page-nav">
                            <a href>Contact&nbsp;Us</a><br style={{ lineHeight: '1.3' }} />
                        </div>
                        <div className="landing-page-nav">
                            <a href>Help</a><br style={{ lineHeight: '1.3' }} />
                        </div>
                        <Link to="/login" style={{ fontSize: "35px", fontFamily: "helvetica", color: "#0991ff" }} className=" d-block d-md-none float-right"> Login</Link>
                    </header>
                    <div style={{ position: "relative" }} className="">
                        <div className="whoever-div mt-5" >
                            {/*Whoever You Are, Whatev<b class="your-job">er Your Job...</b*/}
                            Whoever You Are, Whatever your Job...
                        </div>
                        <div className="lets-brand-div h-100" >
                            <b className="weve-got-you">We've Got You!</b> Let's Brand You.
                        </div>
                        <img src={HomeBannner} style={{ position: "absolute", top: "0", right: "0", zIndex: "-1" }} alt="" className="h-100  img-fluid" />
                    </div>

                    <div align="center" className="register-as-container">
                        <div align="center" className="register-as-label">Register As</div>
                        <div align="center" className="register-as-sections">
                            <div align="center" className="register-as-sections">
                                <Link style={{ textDecoration: 'none' }} to={"/register"}><div align="center" className="register-children">User</div></Link>
                                &nbsp;&nbsp;&nbsp;
                                {/* <Link style={{textDecoration: 'none'}} to={"/cregister"}><div align="center" className="register-children">Company</div></Link>
                        &nbsp;&nbsp;&nbsp;
                        <Link style={{textDecoration: 'none'}} to={"/sregister"}><div align="center" className="register-children">School</div></Link>
                        &nbsp;&nbsp;&nbsp; 
                        <Link style={{textDecoration: 'none'}} to={"/aregister"}><div align="center" className="register-children">Association</div></Link>      */}
                            </div>
                            &nbsp;&nbsp;&nbsp;
                        </div>
                        <br /><br />
                        <div align="center" className="have-an-account">Already have an account?</div>
                        <div align="center" className="landing-page-login-button"><Link to={"/login"}>Login</Link> </div>
                    </div>
                </section>
                <section className="landing-page-section-2">
                    <div className="multi-talented-div">Multi-Talented? Multi-Skilled?</div>
                    <div className="find-kokoruns-div">Find Your Kokoruns</div>
                    <div className="landing-page-categories-div">
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Entertainment</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Art &amp; Crafts</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Agriculture</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Marketing</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">IT</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Education</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Artisanship</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Engineering</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Advertising</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Banking</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Politics</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Health</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Finance</div></a>
                        <a style={{ textDecoration: 'none' }} href><div className="landing-page-categories">Human Resources</div></a>
                    </div>
                    <div align="right" className="illustration-div">
                        <img className="illustration-1" src="assets/Images/Index/Illustration%201.png" />
                    </div>
                </section>
                <section className="">
                    <div className="row m-5 ">
                        <div className="col-sm-12 col-md-6 mb-4 text-center text-md-left">
                            <h2 className="find-join-create">Register a company page</h2>
                            {false ?
                                <Link className=" register-children text-center mt-2 d-none d-md-block" to="/company-dashboard/:id">Get Started</Link>
                                : <Link className=" register-children text-center mt-2 d-none d-md-block" to="/register">Get Started</Link>}
                        </div>
                        <div className="col-sm-12 col-md-6 text-center">
                            <img src={CompanyPageImg} alt="" className=" img-fluid " />
                            {false ?
                                <Link className=" register-children text-center mt-4 d-sm-block d-md-none" to="/company-dashboard/:id">Get Started</Link>
                                : <Link className=" register-children text-center mt-4 d-sm-block d-md-none" to="/register">Get Started</Link>}
                        </div>
                    </div>

                    <div className="row m-5 ">
                        <div className="col-sm-12 col-md-6 mb-4 text-center text-md-left">
                            <h2 className="find-join-create">Register an Association page</h2>
                            {false ?
                                <Link className=" register-children text-center d-none d-md-block" to="/company-dashboard/:id">Get Started</Link>
                                : <Link className=" register-children text-center d-none d-md-block" to="/register">Get Started</Link>}
                        </div>
                        <div className="col-sm-12 col-md-6 text-center">
                            <img src={AssociationPageImg} alt="" className=" img-fluid " />
                            {false ?
                                <Link className=" register-children text-center mt-4 d-sm-block d-md-none" to="/company-dashboard/:id">Get Started</Link>
                                : <Link className=" register-children text-center mt-4 d-sm-block d-md-none" to="/register">Get Started</Link>}
                        </div>
                    </div>

                    <div className="row m-5 ">
                        <div className="col-sm-12 col-md-6 mb-4 text-center text-md-left">
                            <h2 className="find-join-create">Register a School page</h2>
                            {false ?
                                <Link className=" register-children text-center d-none d-md-block" to="/company-dashboard/:id">Get Started</Link>
                                : <Link className=" register-children text-center d-none d-md-block" to="/register">Get Started</Link>}
                        </div>
                        <div className="col-sm-12 col-md-6 text-center">
                            <img src={SchoolPageImg} alt="" className=" img-fluid " />
                            {false ?
                                <Link className=" register-children text-center mt-4 d-sm-block d-md-none" to="/company-dashboard/:id">Get Started</Link>
                                : <Link className=" register-children text-center mt-4 d-sm-block d-md-none" to="/register">Get Started</Link>}
                        </div>
                    </div>

                </section>
                <section className="">
                    <div className="m-sm-2 m-md-5 text-center">
                        <h2 style={{ width: "90%" }} className=" find-join-create mx-auto">Find, Join or Create a Team. Work With Professionals &amp; Colleagues on Projects</h2>
                    </div>
                    <div className="row">
                        <img src={FindJobImg} alt="" className="img-fluid col-sm-12 col-md-6 mx-auto" />
                    </div>
                    <Link to="/contact-us" className=" " style={{ textDecoration: 'none' }} href><div style={{ backgroundColor: "red" }} className="get-started mx-auto mb-5 text-center">Find out more</div></Link>

                </section>

                <Footer />

            </div>



        )
    }
}

export default Home
