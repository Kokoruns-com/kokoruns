import React, { Component } from 'react';
import Header from './components/Header_Footer/Header'
import Footer from './components/Header_Footer/Footer'
import Home from './components/Home';
import LandingPage from './components/LandingPage'
import Login from './components/Login';
import Login2 from './components/Login2';
import Register from './components/Register';
import Register2 from './components/Register2';
import RegisterSuccess from './components/RegisterSuccess';
import RegisterSuccess2 from './components/RegisterSuccess2';
import ProfileSetUp from './components/ProfileSetUp';
import ProfileSetUp2 from './components/ProfileSetUp2';
import Dashboard from './components/Dashboard';
import Dashboard2 from './components/Dashboard2';
import Experience from './components/Experience';
import Education from './components/Education';
import Portfolio from './components/Portfolio';
import Teams from './components/Teams';
import UserMessages from './components/UserMessages';
import UserJobs from './components/UserJobs';
import Jobdash from './components/Jobdash';
import Recommendations from './components/Recommendations';
import JobBoard from './components/JobBoard';
import UserEvents from './components/UserEvents';
import CompanyRegister from './components/CompanyRegister';
import CompanyDashboard from './components/CompanyDashboard';
import CompanyEvents from './components/CompanyEvents';
import CompanyEbroadcasts from './components/CompanyEbroadcasts';
import CompanyESolutions from './components/CompanyESolutions';
import CompanyGallery from './components/CompanyGallery';
import AssociationRegister from './components/AssociationRegister';
import AssociationDashboard from './components/AssociationDashboard';
import AssociationEvents from './components/AssociationEvents';
import AssociationEbroadcasts from './components/AssociationEbroadcasts';
import AssociationESolutions from './components/AssociationESolutions';
import AssociationGallery from './components/AssociationGallery';
import { HashRouter as Router, Switch, Route} from "react-router-dom";
import SchoolRegister from './components/SchoolRegister';


export class App extends Component {
  render() {
    return (
      <Router>

        <div>
    
            <Switch>
              <Route path="/login" component = {Login2} />
              <Route path="/register" component = {Register2} /> 
              <Route exact path = "/" component = {Home}/>
              <Route path="/register-success" component={RegisterSuccess2} />
              <Route path="/profile-setup" component={ProfileSetUp2} />
              <Route path="/user-dashboard" component={Dashboard} />
              <Route path="/user-dashboard2" component={Dashboard2} />
              <Route path="/user-dashboard-experience" component={Experience} />
              <Route path="/user-dashboard-education" component={Education} />
              <Route path="/user-dashboard-portfolio" component={Portfolio} />
              <Route path="/user-teams" component={Teams} />
              <Route path="/user-messages" component={UserMessages} />
              <Route path="/user-jobs" component={UserJobs} />
              <Route path="/user-jobdash" component={Jobdash} />
              <Route path="/user-events" component={UserEvents} />
              <Route path="/user-jobs-board" component={JobBoard} />
              <Route path="/user-recommendations" component={Recommendations} />
              <Route path="/company-register" component={CompanyRegister} />
              <Route path="/company-dashboard/:id" component={CompanyDashboard} />
              <Route path="/company-events/:id" component={CompanyEvents} />
              <Route path="/company-esolutions/:id" component={CompanyESolutions} />
              <Route path="/company-ebroadcasts/:id" component={CompanyEbroadcasts} />
              <Route path="/company-gallery/:id" component={CompanyGallery} />
              <Route path="/association-register" component={AssociationRegister} />
              <Route path="/association-dashboard/:id" component={AssociationDashboard} />
              <Route path="/association-events/:id" component={AssociationEvents} />
              <Route path="/association-esolutions/:id" component={AssociationESolutions} />
              <Route path="/association-ebroadcasts/:id" component={AssociationEbroadcasts} />
              <Route path="/association-gallery/:id" component={AssociationGallery} />
              <Route path="/school-register" component={SchoolRegister} />

            </Switch>

        </div>

    </Router>
    )
  }
}

export default App
