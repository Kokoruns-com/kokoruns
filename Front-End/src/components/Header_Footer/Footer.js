import React from 'react'
import {Link} from 'react-router-dom'
import { FontAwesomeIcon} from '@fortawesome/react-fontawesome'
import { } from '@fortawesome/free-solid-svg-icons'
import { faFacebook , faInstagram , faTwitter , faLinkedinIn, } from '@fortawesome/free-brands-svg-icons'


const Footer = () => {
    return (
        <footer className=" py-10 font-inter">
            <div className="text-center space-x-8 ">
                    <Link className="hover:no-underline whitespace-nowrap text-base text-gray-500 hover:text-gray-900">
                        About Us
                    </Link>
                    <Link className="hover:no-underline whitespace-nowrap text-base text-gray-500 hover:text-gray-900">
                        Contact Us
                    </Link>
                    <Link className="hover:no-underline whitespace-nowrap text-base text-gray-500 hover:text-gray-900">
                        Our Community
                    </Link>
                    <Link className="hover:no-underline whitespace-nowrap text-base text-gray-500 hover:text-gray-900">
                        Guidelines
                    </Link>
                    <Link className="hover:no-underline whitespace-nowrap text-base text-gray-500 hover:text-gray-900">
                        FAQ
                    </Link>
                    <Link className="hover:no-underline whitespace-nowrap text-base text-gray-500 hover:text-gray-900">
                        Terms of Use
                    </Link>
                    <Link className="hover:no-underline whitespace-nowrap text-base text-gray-500 hover:text-gray-900">
                        Terms of Service
                    </Link>
                    <Link className="hover:no-underline whitespace-nowrap text-base text-gray-500 hover:text-gray-900">
                        Privacy Policy
                    </Link>
            </div>
            <div className="text-center mt-6">
                <h6 className=" text-gray-400">© 2021 Kokoruns, Inc. All Rights Reserved</h6>
            </div>
        </footer>
    )
}

   

export default Footer
