import React, { Component } from 'react';


class ProductsFrontpageItem extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="col-md-4 products__item">
                <figure>
                    <img src={"http://lorempixel.com/260/200/transport/" + this.props.product.id} alt=""/>
                </figure>
                <div className="name">{this.props.product.name}</div>
            </div>
        );
    }
}

export default ProductsFrontpageItem;