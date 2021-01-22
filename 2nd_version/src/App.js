import React, { Component } from 'react';
import ReactGA from 'react-ga';
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';

import './App.css';
import LandingPage from './Components/LandingPage';
import Application from './Application/Application'

class App extends Component {
    constructor(props) {
        super(props);
        this.state = {
            foo: 'bar',
            webData: {}
        };

        ReactGA.initialize('UA-110570651-1');
        ReactGA.pageview(window.location.pathname);

    }
    componentDidMount() {
    }
    render() {
        return (
            <Router>
                <div>
                    <Switch>
                        <Route exact path='/' component={LandingPage} />
                        <Route path='/app' component={Application} />
                    </Switch>
                </div>
            </Router>
        );
    }
}

export default App;
