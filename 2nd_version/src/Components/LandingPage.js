import React, { Component } from 'react';
import $ from 'jquery';
import Header from './Header';
import Footer from './Footer';
import Trailer from './Trailer';
import About from './About';
import Contact from './Contact';
import PopUp from "./PopUp";


class LandingPage extends Component {
    constructor(props) {
        super(props);
        this.state = {
            foo: 'bar',
            webData: {},
            seen: true
        };
    }

    getWebData() {
        $.ajax({
            url: '/webData.json',
            dataType: 'json',
            cache: false,
            success: function (data) {
                this.setState({ webData: data });
            }.bind(this),
            error: function (xhr, status, err) {
                console.log(err);
                alert(err);
            }
        });
    }

    componentDidMount() {
        this.getWebData();
    }
    togglePop = () => {
        this.setState({
            seen: !this.state.seen
        });
    };
    render() {
        return (
            <div className="App">
                <Header data={this.state.webData.main} />
                <div>
                    {this.state.seen ? <PopUp toggle={this.togglePop} /> : null}
                </div>
                <Trailer data={this.state.webData.main} />
                <About data={this.state.webData.about} />
                <Contact data={this.state.webData.main} />
                <Footer data={this.state.webData.main} />
            </div>
        );
    }
}

export default LandingPage;
