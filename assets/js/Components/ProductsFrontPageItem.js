import React, { Component } from 'react';


class ProductsFrontpageItem extends Component {

    constructor(props) {
        super(props);
    }

    render() {
        return (
            <div className="col-md-4 products__item">
                <div className="name">{this.props.product.name}</div>
            </div>
        );
    }
}

export default ProductsFrontpageItem;