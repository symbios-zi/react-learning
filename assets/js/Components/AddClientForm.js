import React, {Component} from 'react';
import Menu from '../Components/Menu';
import LoginButtonsContainer from '../Components/LoginButtonsContainer';
import Logo from '../Components/Logo';

class Header extends Component {
    render() {
        return (
            <header>
                <div className="container-fluid">
                    <div className="col-md-3">
                        <Logo/>
                    </div>
                    <div className="col-md-6">
                        <Menu/>
                    </div>
                    <div className="col-md-3">
                        <LoginButtonsContainer/>
                    </div>
                </div>
            </header>
        );
    }
}

export default Header;