import { connect } from 'react-redux';
import React, { Component } from 'react';
import LoginButtons from './LoginButtons'
import LoginedButtons from './LoginedButtons'


class LoginButtonsContainer extends Component {
    render() {
        let buttons = this.props.isAuthenticated ? <LoginedButtons/> : <LoginButtons/>;

        return (
            <nav className="navbar">
                {buttons}
            </nav>
        );
    }
}

function mapStateToProps(state) {
    return {
        isAuthenticated: state.Auth.isAuthenticated
    };
}

export default connect(mapStateToProps)(LoginButtonsContainer);