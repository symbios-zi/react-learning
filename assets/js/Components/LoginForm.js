import React, { Component } from 'react';
import { connect } from 'react-redux';
import { login } from '../Actions/AuthActions';

class LoginForm extends Component {

    constructor(props) {
        super(props);
        this.state = {
            username: '',
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
            (res) => this.context.router.history.push('/')
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
                            <label htmlFor="username">Email:</label>
                            <input
                                type="email"
                                name="_username"
                                className="form-control"
                                onChange={this.onChange}
                            />
                        </div>
                        <div className="form-group">
                            <label htmlFor="_password">Password:</label>
                            <input
                                type="password"
                                name="_password"
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

LoginForm.propTypes = {
    login: React.PropTypes.func.isRequired
}

LoginForm.contextTypes = {
    router: React.PropTypes.object.isRequired
}

export default connect(null, { login })(LoginForm);
