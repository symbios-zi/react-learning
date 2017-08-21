import React, { Component } from 'react';
import { NavLink } from 'react-router-dom';

class Sidebar extends Component {
    render() {
        return (
            <div>
                <div className="navbar-header">
                    <button type="button" className="navbar-toggle">
                        <span className="sr-only">Toggle navigation</span>
                        <span className="icon-bar"></span>
                        <span className="icon-bar"></span>
                        <span className="icon-bar"></span>
                    </button>
                    <span className="visible-xs navbar-brand">Sidebar menu</span>
                </div>
                <div className="navbar-collapse collapse sidebar-navbar-collapse">
                    <ul className="nav nav-pills nav-stacked">
                        <li className="active"><a href="#">Menu Item 1</a></li>
                        <li>
                            <a href="#">Menu Item 2</a>
                        </li>
                        <li>
                            <a href="#">Menu Item 3</a>
                        </li>
                        <li>
                            <a href="#">Menu Item 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        );
    }
}

export default Sidebar;


