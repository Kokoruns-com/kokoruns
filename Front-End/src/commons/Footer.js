import React, { Component } from 'react'

export class Footer extends Component {
    render() {
        return (
            <div className="container-fluid py-3 w-100">
                <div className="row">
                    <div className="col-md-2 text-center mx-auto">
                        <img className="kokoruns-footer-logo" src="/assets/Images/Header%20and%20Footer/Logo.png" width="100%" />
                    </div>
                    <div className="col-md-col-10 col-sm-12 pt-3">
                        <div className="d-flex flex-wrap justify-content-center">
                            <a className="text-primary mx-2">
                                Contact Us
                            </a>
                            <a className="text-primary mx-2">
                                About Us
                            </a>
                            <a className="text-primary mx-2">
                                Our Community Guidelines
                            </a>
                            <a className="text-primary mx-2">
                                FAQ
                            </a>
                            <a className="text-primary mx-2">
                                Terms&nbsp;of&nbsp;Use
                            </a>
                            <a className="text-primary mx-2">
                                Terms&nbsp;of&nbsp;Service
                            </a>
                            <a className="text-primary mx-2">
                                Privacy&nbsp;Policy
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        )
    }
}

export default Footer
