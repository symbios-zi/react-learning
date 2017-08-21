import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';

class Menu extends Component {
    render() {
        return (
            <nav className="navbar navbar-default">
                <ul className="nav navbar-nav">
                    <li><NavLink to="/" activeClassName="active">Index page</NavLink></li>
                    <li><NavLink to="/about" activeClassName="active">About</NavLink></li>
                </ul>
            </nav>
        );
    }
}

export default Menu;