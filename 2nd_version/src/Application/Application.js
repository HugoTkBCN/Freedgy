import React, { Component } from 'react';

class Application extends Component {
    constructor(props) {
        super(props);

        this.state = {
            foo: 'bar',
            webData: {}
        };
    }
    render() {
        return (
        <div id="freedgyApp">
            <img src="images/isbuilding.jpg" />
        </div>

        );
    }
}

export default Application;