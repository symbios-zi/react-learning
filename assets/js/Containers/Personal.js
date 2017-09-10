import React, { Component } from 'react';
import Header from '../Components/Header';

class Personal extends Component {
    render() {

        return (
            <div>
                <Header/>
                <div className="row">
                    <div className="container-fluid">
                        <div className="col-md-4 col-md-offset-4">
                            Hi, you are in a personal page
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Personal;
