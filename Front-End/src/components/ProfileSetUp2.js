import React, { useState } from 'react'
import { useHistory } from 'react-router'
import Header from '../commons/Header';
import NavBar from '../commons/NavBar';
import Footer from '../commons/Footer';
import Modal from 'react-bootstrap/Modal';
import axios from 'axios';
import DatePicker from "react-datepicker";
import "react-datepicker/dist/react-datepicker.css";
import '../css/customcss.css'

//
import StatesLGAList from '../extras/lists/StatesLgaList';
import EducationQualificationList from '../extras/lists/EducationQualificationsList';
import LanguagesList from '../extras/lists/LanguagesList';
import Header2 from '../commons/Header2';

const KOKORUNS_BASE_URL = process.env.REACT_APP_KOKORUNS_BASE_URL;


const ProfileSetUp2 = () => {
    const history = useHistory()
    const [languageArray, setLanguageArray] = useState([1])
    const [professionArray, setProfessionArray] = useState([1])
    const [startDate, setStartDate] = useState(new Date());

    const [proffesionList, setProffesionList] = useState({
        professionOrCraft: [],
        otherProfessions1: [],
        otherProfessions2: [],
        otherProfessions3: [],
        otherProfessions4: [],
    })


    const [userBio, setUserBio] = useState({
        first_name: '',
        last_name: '',
        age_range: '',
        user_phonemum: '',
        user_email: '',
        educational_qualification: '',
        profession_or_craft: '',
        employment_type: '',
        employment_status: '',
        current_employer: '',
        state: '',
        lga: '',
        preferred_job_location_state: '',
        preferred_job_location_lga: '',
        maritalStatus: '',
        disabled: '',
        gender: '',
        other_professions1: '',
        other_professions2: '',
        other_professions3: '',
        other_professions4: '',
        languages1: '',
        languages2: '',
        languages3: '',
        languages4: '',
        languages5: '',
        about: '',
        availability_start_date: new Date()
    })

    const onClickAddLanguage = () => {
        if (languageArray.length < 5) {
            setLanguageArray([...languageArray, languageArray.length + 1])
        } else {
            alert("You can only have 5 Languages")
        }

    }
    const onClickAddProfession = () => {
        if (professionArray.length < 4) {
            setProfessionArray([...professionArray, professionArray.length + 1])
        } else {
            alert("You can only have 5 Professions")
        }
    }

    const onSearchProffession = (e) => {
        const { name, value } = e.target

        const headers = {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem('access_token'),
        }
        axios.get(`${KOKORUNS_BASE_URL}/searchprofessions/${value}`, { headers: headers })
            .then(response => {
                console.log(response)
                if (response.data[0]) {
                    setProffesionList({ ...proffesionList, [name]: response.data[0] })
                } else {
                    setProffesionList({ ...proffesionList, [name]: [] })
                }
            }).catch(err => {
                console.error(err)
            })
    }

    const onClickProfessionList = (e) => {
        //e.target.dataset.id
        setProffesionList({ ...proffesionList, [e.target.dataset.id]: [] })
        setUserBio({ ...userBio, [e.target.dataset.id]: e.target.innerText })
    }

    const onChange = (e) => {
        const { name, value } = e.target
        setUserBio({ ...userBio, [name]: value })
    }

    const onClickSubmit = (e) => {
        e.preventDefault()
        //set Headers
        const headers = {
            "Content-Type": "application/json",
            'Authorization': 'Bearer ' + localStorage.getItem('access_token'),
        }
        const data = userBio

        axios.post(`${KOKORUNS_BASE_URL}/profilesetup`, {data : data}, {headers: headers})
            .then(response => {
                console.log(response)
                history.push("/user-dashboard")
            }).catch(err => {
                console.error(err)
            })
    }
    return (
        <>
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

          <div className="container bg-white mt-5" style={{ border: 'solid grey 2px', padding :"0" }}  >
                <div className="modal-header rounded-0 py-3 text-white" style={{ background: '#70a1B9' }}>
                    <div id="contained-modal-title-vcenter">
                        <strong> Profile Setup</strong>
                    </div>
                </div>
                <div className="p-4">
                    <form action="post" onSubmit={onClickSubmit} id="myform">
                        <p className=" ">You are required to set up your profile. This is a one-time initial set up and you can always change them later in future from your dashboard. All fields marked * are mandatory</p>
                        <div className="row">
                            <div className="col-12 col-md">
                                <label className="required" ><strong>First Name</strong></label>
                                <input type="text" name="first_name" className="form-control" value={userBio.first_name} onChange={onChange} />
                            </div>
                            <div className="col-12 col-md">
                                <label className="required"><strong>Last Name</strong></label>
                                <input type="text" name="last_name" className="form-control" value={userBio.last_name} onChange={onChange} />
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col-12 col-md">
                                <label className="required"><strong>Current Location</strong></label>
                            </div>
                        </div>

                        <div className="row">
                            <div className="col-12 col-md">
                                <select name="state" value={userBio.state} onChange={onChange} className="form-control">
                                    <option>Select State</option>
                                    {StatesLGAList.map((state, index) => {
                                        return <option key={index} value={state.name}>{state.name}</option>;
                                    })}
                                </select>

                            </div>
                            <div className="col-12 col-md mt-2 mt-md-0">
                                <select name="lga" value={userBio.lga} onChange={onChange} className="form-control">
                                    <option>Select LGA</option>
                                    {userBio.state !== "" && StatesLGAList.find(State => State.name === userBio.state).lgas.map((lga, index) => {
                                        return <option key={index} value={lga.name} >{lga.name}</option>
                                    })}
                                </select>
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col-12 col-md">
                                <label className="required"><strong>Email</strong></label>
                                <input type="email" name="user_email" className="form-control" value={userBio.user_email} onChange={onChange} />
                            </div>
                            <div className="col-12 col-md">
                                <label><strong>Phone</strong></label>
                                <input type="number" name="user_phonemum" className="form-control" value={userBio.user_phonemum} onChange={onChange} />
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col-12 col-md">
                                <label className="required"><strong>Profession</strong></label>
                                <input type="text" name="profession_or_craft" className="form-control" value={userBio.profession_or_craft} onChange={onChange} />
                            </div>
                            <div className="col-12 col-md">
                                <label className="required"><strong>Academic level</strong></label>
                                <select name="educational_qualification" id className="form-control" value={userBio.educational_qualification} onChange={onChange} required>
                                    <option value>Select one</option>
                                    {EducationQualificationList.map((item, index) => <option key={index} value={item.name} >{item.name}</option>)}
                                </select>
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col-12 col-md">
                                <label className="required"><strong>Gender</strong></label>
                                <select className="form-control" id="gender" name="gender" value={userBio.gender} onChange={onChange} required>
                                    <option value="">Select:</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div className="col-12 col-md">
                                <label><strong>Marital Status</strong></label>
                                <select className="form-control" id="marital_status" name="marital_status" value={userBio.marital_status} onChange={onChange} required>
                                    <option value="">Select:</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col">
                                <label><strong>Current Employer</strong></label>
                                <input className="form-control" type="text" id="current_employer" name="current_employer" value={userBio.current_employer} onChange={onChange} />
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col">
                                <label className="required"> <strong>Disabled</strong></label>
                            </div>
                        </div>

                        <div className="row" >
                            <div className="col" >
                                <input type="radio" name="disabled" value="Yes" onChange={() => { setUserBio({ ...userBio, disabled: "Yes" }) }} required />
                                <label className="ml-2">Yes</label>
                            </div>
                            <div className="col">
                                <input type="radio" name="disabled" value="No" onChange={() => { setUserBio({ ...userBio, disabled: "No" }) }} />
                                <label className="ml-2">No</label>
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col">
                                <label><strong>I Speak</strong></label>
                                {languageArray.map((language, index) => {
                                    return (
                                        <select key={index} className="form-control mb-4" id="language" name={`languages${language}`} value={userBio[`languages${language}`]} onChange={onChange} >
                                            <option value="">Select Language {language} </option>
                                            {LanguagesList.map((item, index2) => <option key={index2} value={item.name}> {item.name} </option>)}
                                        </select>
                                    )
                                })}
                                <button type="button" className="btn btn-outline-info" onClick={onClickAddLanguage}>
                                    Add Language
                                </button>
                            </div>
                        </div>


                        <div className="row mt-3">
                            <div className="col">
                                <label><strong>Other Professions</strong></label>
                                {professionArray.map((proffession, index) => {
                                    return (
                                        <div key={index} className=" mb-4 relative">
                                            <label className="">Select other Proffesion {proffession} </label>
                                            <input onKeyUp={onSearchProffession} className="form-control" value={userBio[`other_professions${proffession}`]} type="text" name={`other_professions${proffession}`} onChange={onSearchProffession} />
                                            <div class="custom-dropdown" aria-labelledby="dropdownMenuButton">
                                                {proffesionList[`otherProfessions${proffession}`].map((item) => {
                                                    return <span data-id={`otherProfessions${proffession}`} onClick={onClickProfessionList} key={item.id} class="dropdown-item" >{item.name}</span>
                                                })}
                                            </div>
                                        </div>
                                    )
                                })}
                                <button id="profbutton1x" type="button" align="left" className="btn btn-outline-info" onClick={onClickAddProfession}>
                                    Add Other Profession
                                </button>
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col-12 col-md">
                                <label className="required"><strong>Employment Type</strong></label>
                                <select className="form-control" name="employment_type" value={userBio.employment_type} onChange={onChange} required>
                                    <option value="">Select one</option>
                                    <option value="Full Time" >Full Time</option>
                                    <option value="Part Time">Part Time</option>
                                    <option value="Remote">Remote</option>
                                    <option value="Contract">Contract</option>
                                    <option value="Volunteer">Volunteer</option>
                                    <option value="Internship">Internship</option>
                                    <option value="Apprentice/Trainee">Apprentice/Trainee</option>
                                </select>
                            </div>
                            <div className="col-12 col-md">
                                <label className="required"><strong>Present Employment Status</strong></label>
                                <select className="form-control" name="employment_status" value={userBio.employment_status} onChange={onChange} required>
                                    <option value="">Select:</option>
                                    <option value="None">None</option>
                                    <option value="Available for Employment">Available for Employment</option>
                                    <option value="Unavailable for Employment">Unavailable for Employment</option>
                                    <option value="Business Owner">Business Owner</option>
                                </select>
                            </div>
                        </div>
                        
                       

                        <div className="row mt-3">
                            <div className="col">
                                <label><strong>Prefered Job Location</strong></label>
                            </div>
                        </div>

                        <div className="row">
                            <div className="col-12 col-md">
                                <select name="preferred_job_location_state" value={userBio.preferred_job_location_state} onChange={onChange} className="form-control">
                                    <option>Select State</option>
                                    {StatesLGAList.map((state, index) => {
                                        return <option key={index} value={state.name}>{state.name}</option>;
                                    })}
                                </select>
                            </div>
                            <div className="col-12 col-md mt-2 mt-md-0">
                                <select name="preferred_job_location_lga" value={userBio.preferred_job_location_lga} onChange={onChange} className="form-control">
                                    <option>Select LGA</option>
                                    {userBio.preferred_job_location_state !== "" && StatesLGAList.find(State => State.name === userBio.preferred_job_location_state).lgas.map((lga, index) => {
                                        return <option key={index} value={lga.name} >{lga.name}</option>
                                    })}
                                </select>
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col">
                                <label><strong>Preffered Start Date</strong></label>
                                <DatePicker selected={userBio.availability_start_date} onChange={(date) => setUserBio({...userBio, availability_start_date : date})} />
                            </div>
                        </div>
                        <div className="row mt-3">
                            <div className="col">
                                <label className="required"><strong>About</strong></label>
                                <textarea className="form-control" name="about" value={userBio.about} onChange={onChange} required />
                            </div>
                        </div>
                    </form>
                </div>

                <div className="modal-footer p-2">
                    <button type="submit" className="btn btn-success w-75 mx-auto" form="myform" onclick="return confirm('Are you sure you want to create this event?')">Update</button>
                </div>

            </div>


            <Footer />


        </>
    )
}

export default ProfileSetUp2
