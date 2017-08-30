import React, { Component } from 'react';
import axios from 'axios';
import ProductsFrontpageItem from './ProductsFrontpageItem';

class ProductsFrontpageList extends Component {

    constructor(props) {
        super(props);
        this.state = {
            products: []
        }
    }

    componentDidMount() {
        axios.get('/api/v1/products')
            .then(response => {
                this.setState({ products: JSON.parse(response.data) });
            })
            .catch((error) => {
                console.log("error",error)
            });
    }

    render() {
        return (
            <div className="row">
                <div className="products__list">
                    {this.state.products.map((product, index) =>
                        <ProductsFrontpageItem
                            key={index}
                            product={product}
                        />
                    )}
                </div>
            </div>
        );
    }
}

export default ProductsFrontpageList;