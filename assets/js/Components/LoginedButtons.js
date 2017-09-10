import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';

class LoginedButtons extends Component {
    render() {
        return (
            <ul className="nav navbar-nav login-buttons__list pull-right">
                <li className="login-buttons__item">
                    <NavLink to="/personal" activeClassName="active">Личный кабинет</NavLink>
                </li>
            </ul>
        );

    }
}

export default LoginedButtons;