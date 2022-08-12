import React, {useEffect} from 'react'
import { Link } from 'react-router-dom'
import {FontAwesomeIcon} from '@fortawesome/react-fontawesome'

import Logo from '../../img/Logo.png'
const Header = () => {
    return (
        <header className="mx-4 py-4 flex relative z-50 items-center justify-between border-gray-200">
            <div className="w-52">
                <Link to = "/">
                <img src={Logo} alt="logo" layout="intrinsic" objectFit="cover"/>
                </Link>
            </div>

            <div className="ml-5 space-x-10">
                    <Link to= "#" className=" hover:no-underline whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        About Us
                    </Link>
                    <Link to = "#" className=" hover:no-underline whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Contact Us
                    </Link>
                    <Link to = "#" className=" hover:no-underline whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Help
                    </Link>
            </div>

            <div className=" flex items-center space-x-5 ">
                    <Link to = "/login" className="hover:no-underline whitespace-nowrap text-base font-medium  text-gray-500 hover:text-gray-900">
                        Sign in
                    </Link>
                    <Link to = "/Register" className="hover:no-underline px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                        Sign Up
                    </Link>
            </div>
        </header>
    )
}

export default Header
