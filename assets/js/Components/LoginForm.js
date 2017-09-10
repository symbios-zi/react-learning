import React, { Component } from 'react';
import { connect } from 'react-redux';
import { login } from '../Actions/AuthActions';

class LoginForm extends Component {

    constructor(props) {
        super(props);
        this.state = {
            email: '',
            errors: {},
            isLoading: false,
            invalid: false
        };

        this.onChange = this.onChange.bind(this);
        this.onSubmit = this.onSubmit.bind(this);
    }

    onChange(e) {
        this.setState({ [e.target.name]: e.target.value });
    }

    isValid() {
        const { errors, isValid } = validateInput(this.state);

        if (!isValid) {
            this.setState({ errors });
        }

        return isValid;
    }

    onSubmit(e) {
        e.preventDefault();
        this.setState({ errors: {}, isLoading: true });
        this.props.login(this.state).then(
            (res) => this.context.router.push('/'),
            (err) => this.setState({ errors: err.response.data.errors, isLoading: false })
        );
    }

    render() {
        return (
            <form onSubmit={this.onSubmit}>
                <div className="panel panel-default">
                    <div className="panel-heading">
                        Вход в личный кабинет
                    </div>
                    <div className="panel-body">
                        <div className="form-group">
                            <label htmlFor="email">Email:</label>
                            <input
                                type="email"
                                name="email"
                                className="form-control"
                                onChange={this.onChange}
                            />
                        </div>
                        <div className="form-group">
                            <label htmlFor="password">Password:</label>
                            <input
                                type="password"
                                name="password"
                                className="form-control"
                                onChange={this.onChange}
                            />
                        </div>
                        <button
                            type="submit"
                            className="btn btn-primary"
                        >Войти</button>
                    </div>
                </div>
            </form>
        );
    }
}

export default connect(null, { login })(LoginForm);
