import React, {Component} from 'react';
import Menu from '../Components/Menu';

class Header extends Component {
    render() {
        return (
            <div className="container-fluid">
                <Menu/>
            </div>
        );
    }
}

export default Header;