import React, { Component } from 'react';
import Header from '../Components/Header';
import RegisterForm from "../Components/RegisterForm";
import { connect } from 'react-redux';
import { userSignupRequest, isUserExists } from '../Actions/SignupActions';


class Register extends Component {
    render() {

        const { userSignupRequest} = this.props;


        return (
            <div>
                <Header/>
                <div className="row">
                    <div className="container-fluid">
                        <div className="col-md-4 col-md-offset-4">
                            <RegisterForm
                                userSignupRequest={userSignupRequest}
                            />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default connect(null, { userSignupRequest})(Register);
