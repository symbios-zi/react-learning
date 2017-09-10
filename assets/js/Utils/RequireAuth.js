import React from 'react';
import { connect } from 'react-redux';
import { addFlashMessage } from '../Actions/FlashMessages';

export default function(ComposedComponent) {
    class Authenticate extends React.Component {
        componentWillMount() {
            if (!this.props.isAuthenticated) {
                this.props.addFlashMessage({
                    type: 'error',
                    text: 'Ошибка. Нужно авторизоваться'
                });
                this.context.router.history.push('/login');
            }
        }

        componentWillUpdate(nextProps) {
            if (!nextProps.isAuthenticated) {
                this.context.router.history.push('/');
            }
        }

        render() {
            return (
                <ComposedComponent {...this.props} />
            );
        }
    }

    Authenticate.propTypes = {
        isAuthenticated: React.PropTypes.bool.isRequired,
        addFlashMessage: React.PropTypes.func.isRequired
    }

    Authenticate.contextTypes = {
        router: React.PropTypes.object.isRequired
    }

    function mapStateToProps(state) {
        return {
            isAuthenticated: state.Auth.isAuthenticated
        };
    }

    return connect(mapStateToProps, { addFlashMessage })(Authenticate);
}