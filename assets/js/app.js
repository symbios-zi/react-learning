import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import thunk from 'redux-thunk';
import { createStore, applyMiddleware, compose } from 'redux';
import { BrowserRouter, Switch, Route } from 'react-router-dom';
import rootReducer from './rootReducer';
import setAuthorizationToken from './Utils/SetAuthorizationToken';
import jwtDecode from 'jwt-decode';
import { setCurrentUser } from './Actions/AuthActions';
import requireAuth from './utils/requireAuth';


// containers
import Frontpage from './Containers/Frontpage';
import NotFound from './Containers/NotFound';
import Register from './Containers/Register';
import Personal from './Containers/Personal';
import Login from './Containers/Login';


const store = createStore(
    rootReducer,
    compose(
        applyMiddleware(thunk),
        window.devToolsExtension ? window.devToolsExtension() : f => f
    )
);


if (localStorage.jwtToken) {
    setAuthorizationToken(localStorage.jwtToken);
    store.dispatch(setCurrentUser(jwtDecode(localStorage.jwtToken)));
}

ReactDOM.render((
    <Provider store={store}>
        <BrowserRouter>
        <Switch>
            <Route exact path="/" component={Frontpage} />
            <Route exact path="/login" component={Login} />
            <Route exact path="/register" component={Register} />
            <Route exact path="/personal" component={requireAuth(Personal)} />

            <Route component={NotFound} />
        </Switch>
        </BrowserRouter>
    </Provider>
), document.getElementById( 'app' ) );