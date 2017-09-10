import React, { Component } from 'react';
import Header from '../Components/Header';
import LoginForm from "../Components/LoginForm";


class Login extends Component {
    render() {

        return (
            <div>
                <Header/>
                <div className="row">
                    <div className="container-fluid">
                        <div className="col-md-4 col-md-offset-4">
                            <LoginForm/>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Login;
