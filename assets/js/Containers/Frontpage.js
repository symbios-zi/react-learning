import React, { Component } from 'react';
import Header from '../Components/Header';
import Sidebar from '../Components/Sidebar';

class Frontpage extends Component {
    render() {
        return (
            <div>
                <Header/>
                <div className="row">
                    <div className="container-fluid">
                        <div className="col-md-3">
                            <Sidebar/>
                        </div>
                        <div className="col-md-9">
                            <h1>Front page</h1>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default Frontpage;