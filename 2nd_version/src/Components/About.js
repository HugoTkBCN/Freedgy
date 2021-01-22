import React, { Component } from 'react';

class About extends Component {
    render() {
        if (this.props.data) {
            var devs = this.props.data.devs.map(function (dev) {
                return <div key={dev.name} className="dev"><img className="devPic" src={dev.image}></img><h3>{dev.name}</h3></div>
            })
        }
        return (
            <section id="about">
                <div>
                        <h1><span>About us</span></h1>
                    <div className="devs">
                        {devs}
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" className="waveAbout">
                    <path fill="#f3f4f5" fillOpacity="1" d="M0,224L48,208C96,192,192,160,288,165.3C384,171,480,213,576,208C672,203,768,149,864,144C960,139,1056,181,1152,208C1248,235,1344,245,1392,250.7L1440,256L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                </svg>
            </section>
        );
    }
}

export default About;
