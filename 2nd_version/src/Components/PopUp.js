import React, { Component } from "react";
import emailjs from 'emailjs-com';

class PopUp extends Component {
    handleClick = () => {
        this.props.toggle();
    };
    render() {
        function sendEmail(e) {
            e.preventDefault();
            $('#image-loader').fadeIn();

            emailjs.sendForm('Freedgy_Contact', 'template_uht7a3p', e.target, 'user_2StMasAbAPzMasQrAyivL')
                .then((result) => {
                    $('#image-loader').fadeOut();
                    $('#message-warning').hide();
                    $('#newsLetterForm').fadeOut();
                    $('#message-success').fadeIn();
                    console.log(result.text);
                }, (error) => {
                    console.log(error.text);
                    $('#image-loader').fadeOut();
                    $('#message-warning').html(error.text);
                    $('#message-warning').fadeIn();
                });
        }
        return (
            <div id="popup">
                <div className="popup_content">
                    <span className="close" onClick={this.handleClick}>
                        &times;
                    </span>
                    <form onSubmit={sendEmail} id="newsLetterForm" name="newsLetterForm">
                        <h3>Join our Newsletter!</h3>
                        <div>
                            <label htmlFor="newsLetterEmail">Email <span className="required">*</span></label>
                            <input type="text" defaultValue="" size="35" id="newsLetterEmail" name="user_email" onChange={this.handleChange} />
                        </div>
                        <div>
                            <button className="submit">Submit</button>
                            <span id="image-loader">
                                <img alt="" src="images/loader.gif" />
                            </span>
                        </div>
                    </form>
                    <div id="message-warning"> Error</div>
                    <div id="message-success">
                        <i className="fa fa-check"></i>Thank you!<br />
                    </div>
                </div>
            </div>
        );
    }
}

export default PopUp;