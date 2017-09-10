import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';

class Menu extends Component {
    render() {
        return (
            <nav className="navbar">
                <ul className="nav navbar-nav">
                    <li><NavLink to="/about" activeClassName="active">О системе</NavLink></li>
                    <li><NavLink to="/personal" activeClassName="active">Цена</NavLink></li>
                </ul>
            </nav>
        );
    }
}
export default Menu;