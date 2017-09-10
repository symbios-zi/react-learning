import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';

class LoginButtons extends Component {
    render() {
        return (
            <ul className="nav navbar-nav pull-right">
                <li className="login-buttons__item">
                    <NavLink to="/login" activeClassName="active">Войти</NavLink>
                </li>
                <li className="login-buttons__item">
                    <NavLink to="/register" activeClassName="active">Регистрация</NavLink>
                </li>
            </ul>
        );

    }
}

export default LoginButtons;