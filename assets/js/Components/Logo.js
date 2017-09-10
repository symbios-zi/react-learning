import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';
import logo from '../../images/logo.png'

class Logo extends Component {
    render() {
        return (
            <div className="header__logo">
                <NavLink to="/">
                    <img src={logo} alt=""/>
                </NavLink>
            </div>
        );

    }
}

export default Logo;