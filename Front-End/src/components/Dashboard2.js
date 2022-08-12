import React, { useState, useEffect } from "react";
import Header from "../commons/Header";
import NavBar from "../commons/NavBar";
import Footer from "../commons/Footer";
import Modal from "react-bootstrap/Modal";
import { Link } from "react-router-dom";
import axios from "axios";
import jwt from "jwt-decode"; // import dependency
import '../css/dashboardcss.css'

//
import StatesLGAList from "../extras/lists/StatesLgaList";
import EducationQualificationList from "../extras/lists/EducationQualificationsList";
import LanguagesList from "../extras/lists/LanguagesList";

const KOKORUNS_BASE_URL = process.env.REACT_APP_KOKORUNS_BASE_URL;

const Dashboard2 = ({ history }) => {
    const [showModal, setShowModal] = useState(false)
    const [languageArray, setLanguageArray] = useState([1]);
    const [professionArray, setProfessionArray] = useState([1]);

    const [proffesionList, setProffesionList] = useState({
        professionOrCraft: [],
        otherProfessions1: [],
        otherProfessions2: [],
        otherProfessions3: [],
        otherProfessions4: [],
    });

    const [userBio, setUserBio] = useState({
        first_name: "",
        last_name: "",
        age_range: "",
        user_phonemum: "",
        user_email: "",
        educational_qualification: "",
        profession_or_craft: "",
        employment_type: "",
        employment_status: "",
        current_employer: "",
        selectedState: "",
        selectedLGA: "",
        selectedState2: "",
        selectedLGA2: "",
        marital_status: "",
        disabled: "",
        gender: "",
        other_professions1: "",
        other_professions2: "",
        other_professions3: "",
        other_professions4: "",
        languages1: "",
        languages2: "",
        languages3: "",
        languages4: "",
        languages5: "",
        about: "",
    });

    useEffect(() => {
        const headers = {
            'Content-Type': 'application/json',
            'Authorization': 'Bearer ' + localStorage.getItem('access_token')
        }

        axios.get(`${KOKORUNS_BASE_URL}/userdetails`, {
            headers: headers
        }).then(res => {
            const userDetails = res.data.user_details;
            console.log(userDetails)
            setUserBio({ ...userBio, first_name: userDetails["first_name"] })
            Object.keys(userDetails).map(detail => {
                //setUserBio({ ...userBio, [detail]: userDetails[detail] });
                console.log({ "bio": userBio[detail] }, { "user": userDetails[detail] })
                return true;
            })

        })

    }, [])

    const onClickAddLanguage = () => {
        if (languageArray.length < 5) {
            setLanguageArray([...languageArray, languageArray.length + 1]);
        } else {
            alert("You can only have 5 Languages");
        }
    };
    const onClickAddProfession = () => {
        if (professionArray.length < 4) {
            setProfessionArray([
                ...professionArray,
                professionArray.length + 1,
            ]);
        } else {
            alert("You can only have 5 Professions");
        }
    };

    const onSearchProffession = (e) => {
        const { name, value } = e.target;

        const headers = {
            "Content-Type": "application/json",
            Authorization: "Bearer " + localStorage.getItem("access_token"),
        };
        axios
            .get(`${KOKORUNS_BASE_URL}/searchprofessions/${value}`, {
                headers: headers,
            })
            .then((response) => {
                console.log(response);
                if (response.data[0]) {
                    setProffesionList({
                        ...proffesionList,
                        [name]: response.data[0],
                    });
                } else {
                    setProffesionList({ ...proffesionList, [name]: [] });
                }
            })
            .catch((err) => {
                console.error(err);
            });
    };

    const onClickProfessionList = (e) => {
        //e.target.dataset.id
        setProffesionList({ ...proffesionList, [e.target.dataset.id]: [] });
        setUserBio({ ...userBio, [e.target.dataset.id]: e.target.innerText });
    };

    const onChange = (e) => {
        const { name, value } = e.target;
        setUserBio({ ...userBio, [name]: value });
    };

    const onClickSubmit = (e) => {
        e.preventDefault();
        //set Headers
        const headers = {
            "Content-Type": "application/json",
            Authorization: "Bearer " + localStorage.getItem("access_token"),
        };
        const data = userBio;

        axios.post(`${KOKORUNS_BASE_URL}/profilesetup`, { data: data },
            {
                headers: headers
            }
        ).then((response) => {
            console.log(response);
            hideModal()
        })
            .catch((err) => {
                console.error(err);
            });
    };

    const hideModal = () => {
        if (showModal) {
            setShowModal(false)
        } else {
            setShowModal(true)
        }
    }
    return (
        <>
            <Header />
            <main className="dashboard  mx-auto w-75 mt-5">
                <section className="">
                    <NavBar />
                </section>
                <section style = {{border : " 1px solid #d3d3d3" , borderRadius : "5px"}}   className="mt-5 bg-white p-5">
                    <div className="row d-flex align-items-center flex-column">
                        <div className="">
                            <img style = {{height : "100px", width : "100px"}} src="" alt="" className="" />
                        </div>
                        <h5 className="h5">Johnson Olaoluwa</h5>
                    </div>
                    <div className="mb-4 d-flex justify-content-end">
                        <h5 className=" ">47 Recommendations</h5>
                    </div>
                    <div className="row mb-4 ">
                        <h5 className=" dashboard-label col-3"> Location:</h5>
                        <h5 className=" col"> Jos South,Plateau State</h5>
                    </div>
                    <div className="row mb-4 ">
                        <h5 className=" dashboard-label col-3"> Educational Qulification:</h5>
                        <h5 className=" col"> Student University Of Ibadan</h5>
                    </div>
                    <div className="row mb-4 ">
                        <h5 className="  dashboard-label col-3"> Sex:</h5>
                        <h5 className=" col"> Male</h5>
                    </div>
                    <div className="row mb-4 ">
                        <h5 className=" dashboard-label  col-3"> Marital Status:</h5>
                        <h5 className=" col"> Single</h5>
                    </div>
                    <div className="row mb-4 ">
                        <h5 className=" dashboard-label  col-3"> Current Employer:</h5>
                        <h5 className=" col"> Johnson Olaoluwa</h5>
                    </div>
                    <div className="row mb-4">
                        <h5 className="  dashboard-label col-3"> I Speak:</h5>
                        <h5 className=" col"> Johnson Olaoluwa</h5>
                    </div>
                    <div className="row mb-4">
                        <h5 className=" dashboard-label  col-3"> Other Proffessions:</h5>
                        <h5 className=" col"> Johnson Olaoluwa</h5>
                    </div>
                    <div className="row mb-4">
                        <div className="col-12">
                            <h5 className=" dashboard-label">Desired Employment</h5>
                            <div className="row">
                                <h6 className="col-3 dashboard-label ">Type:</h6>
                                <h6 className="col">Johnson Olaoluwa</h6>
                            </div>
                            <div className="row">
                                <h6 className="col-3 dashboard-label ">Present Status:</h6>
                                <h6 className="col">Johnson Olaoluwa</h6>
                            </div>
                            <div className="row">
                                <h6 className="col-3 dashboard-label ">Preffered Location:</h6>
                                <h6 className="col">Johnson Olaoluwa</h6>
                            </div>
                        </div>
                    </div>
                    <div className="row mb-4">
                        <h5 className="col-12 dashboard-label ">About Me</h5>
                        <h6 className="col-12">Johnson Olaoluwa</h6>
                    </div>
                    <div className="row">
                        <button onClick={hideModal} className="w-50 mx-auto btn btn-info">
                            Edit Bio
                        </button>
                    </div>
                </section>
            </main>
            <Modal size="lg" aria-labelledby="contained-modal-title-vcenter" centered scrollable={true} show={showModal} handleClose={hideModal}>
                <Modal.Header className="modal-header rounded-0 py-2 text-white" style={{ background: '#70a1B9' }}>
                    <Modal.Title id="contained-modal-title-vcenter">
                        <strong> Bio Details</strong>
                    </Modal.Title>
                    <span style={{ fontSize: "24px" }} onClick={hideModal} className="close-modal-btn cursor">x</span>
                </Modal.Header>
                <Modal.Body className="px-4">
                    <form action="post" onSubmit={onClickSubmit} id="myform">

                        <div className="row">
                            <div className="col">
                                <label><strong>First Name</strong></label>
                                <input type="text" name="first_name" className="form-control" value={userBio.first_name} onChange={onChange} />
                            </div>
                            <div className="col">
                                <label><strong>Last Name</strong></label>
                                <input type="text" name="last_name" className="form-control" value={userBio.last_name} onChange={onChange} />
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col">
                                <label><strong>Current Location</strong></label>
                            </div>
                        </div>

                        <div className="row">
                            <div className="col">
                                <select name="selectedState" value={userBio.selectedState} onChange={onChange} className="form-control">
                                    <option>Select State</option>
                                    {StatesLGAList.map((state, index) => {
                                        return <option key={index} value={state.name}>{state.name}</option>;
                                    })}
                                </select>

                            </div>
                            <div className="col">
                                <select name="selectedLGA" value={userBio.selectedLGA} onChange={onChange} className="form-control">
                                    <option>Select LGA</option>
                                    {userBio.selectedState !== "" && StatesLGAList.find(State => State.name === userBio.selectedState).lgas.map((lga, index) => {
                                        return <option key={index} value={lga.name} >{lga.name}</option>
                                    })}
                                </select>
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col">
                                <label><strong>Email</strong></label>
                                <input type="email" name="user_email" className="form-control" value={userBio.user_email} onChange={onChange} />
                            </div>
                            <div className="col">
                                <label><strong>Phone</strong></label>
                                <input type="number" name="user_phonemum" className="form-control" value={userBio.user_phonemum} onChange={onChange} />
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col">
                                <label><strong>Profession</strong></label>
                                <input type="text" name="profession_or_craft" className="form-control" value={userBio.profession_or_craft} onChange={onChange} />
                            </div>
                            <div className="col">
                                <label><strong>Academic level</strong></label>
                                <select name="educational_qualification" id className="form-control" value={userBio.educational_qualification} onChange={onChange} required>
                                    <option value>Select one</option>
                                    {EducationQualificationList.map((item, index) => <option key={index} value={item.name} >{item.name}</option>)}
                                </select>
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col">
                                <label><strong>Gender</strong></label>
                                <select className="form-control" id="gender" name="gender" value={userBio.gender} onChange={onChange} required>
                                    <option value="">Select:</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div className="col">
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
                                <label> <strong>Disabled</strong></label>
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
                            <div className="col">
                                <label><strong>Employment Type</strong></label>
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
                            <div className="col">
                                <label><strong>Present Employment Status</strong></label>
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
                            <div className="col">
                                <select name="selectedState2" value={userBio.selectedState2} onChange={onChange} className="form-control">
                                    <option>Select State</option>
                                    {StatesLGAList.map((state, index) => {
                                        return <option key={index} value={state.name}>{state.name}</option>;
                                    })}
                                </select>
                            </div>
                            <div className="col">
                                <select name="selectedLGA2" value={userBio.selectedLGA2} onChange={onChange} className="form-control">
                                    <option>Select LGA</option>
                                    {userBio.selectedState2 !== "" && StatesLGAList.find(State => State.name === userBio.selectedState2).lgas.map((lga, index) => {
                                        return <option key={index} value={lga.name} >{lga.name}</option>
                                    })}
                                </select>
                            </div>
                        </div>

                        <div className="row mt-3">
                            <div className="col">
                                <label><strong>About</strong></label>
                                <textarea className="form-control" name="about" value={userBio.about} onChange={onChange} required />
                            </div>
                        </div>
                    </form>
                </Modal.Body>

                <div className="modal-footer p-0">
                    <button type="submit" className="btn btn-success" form="myform" onclick="return confirm('Are you sure you want to create this event?')">Update</button>
                </div>

            </Modal>
            <Footer />
        </>
    );
};

export default Dashboard2;
