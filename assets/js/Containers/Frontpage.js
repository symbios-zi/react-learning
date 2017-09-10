import React, { Component } from 'react';
import Header from '../Components/Header';
import Sidebar from '../Components/Sidebar';
import ProductsFrontpageList from '../Components/ProductsFrontpageList'

class Frontpage extends Component {

    render() {
        return (
            <div>
                <Header/>
                <section className="hello-section">
                    <div className="row">
                        <div className="container-fluid">
                            <div className="col-md-6">
                                <div className="hello-section__message">
                                    Cамая простая CRM. <br/>Для малого бизнеса.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        );
    }
}

export default Frontpage;