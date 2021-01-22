import React, { Component } from 'react';
import { Link } from "react-router-dom";
import { Button } from 'semantic-ui-react'


class Header extends Component {
    render() {
        if (this.props.data) {
            var name = this.props.data.name;
            var description = this.props.data.description;
            var logo = "images/" + this.props.data.logo;
        }
        return (
            <section id="header">
                <nav id="nav-wrap">
                    <a className="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a>
                    <a className="mobile-btn" href="#home" title="Hide navigation">Hide navigation</a>
                    <ul id="nav" className="nav">
                        <li className="current"><a className="smoothscroll" href="#header">Home</a></li>
                        <li><a className="smoothscroll" href="#trailer">Trailer</a></li>
                        <li><a className="smoothscroll" href="#about">About us</a></li>
                        <li><a className="smoothscroll" href="#contact">Contact</a></li>
                    </ul>
                    {/*<img className="logo" src={logo} alt="Freedgy logo" />*/}


                </nav>

                <Link to="/app">
                    <Button className="buttonToApp">
                        <span>Go To Application</span>
                    </Button>
                </Link>

                <div className="row banner">
                    <div className="banner-text">
                        <h1 className="responsive-headline">{name}</h1>
                        <h3>{description}</h3>
                        <hr />
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" className="waveHeader">
                    <path fill="#f3f4f5" fillOpacity="1" d="M0,192L60,170.7C120,149,240,107,360,122.7C480,139,600,213,720,234.7C840,256,960,224,1080,208C1200,192,1320,192,1380,192L1440,192L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
                </svg>
                <p className="scrolldown">
                    <a className="smoothscroll" href="#trailer"><i className="icon-down-circle"></i></a>
                </p>

            </section>

        );
    }
}

export default Header;
