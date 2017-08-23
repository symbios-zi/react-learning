import React, { Component } from 'react';
import Header from '../Components/Header';
import Sidebar from '../Components/Sidebar';
import axios from 'axios';

class Frontpage extends Component {

    componentDidMount(){
        axios.get('/api/v1/products')
            .then(response => {
                let myData = JSON.parse(response.data);
                console.log(myData.name);
            })
            .catch((error) => {
                console.log("error",error)
            })
    }

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