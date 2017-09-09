import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import thunk from 'redux-thunk';
import { createStore, applyMiddleware, compose } from 'redux';
import { BrowserRouter, Switch, Route } from 'react-router-dom';
import Frontpage from './Containers/Frontpage';
import About from './Containers/About';
import NotFound from './Containers/NotFound';
import Register from './Containers/Register';
import rootReducer from './rootReducer';


const store = createStore(
    rootReducer,
    compose(
        applyMiddleware(thunk),
        window.devToolsExtension ? window.devToolsExtension() : f => f
    )
);

ReactDOM.render((
    <Provider store={store}>
        <BrowserRouter>
        <Switch>
            <Route exact path="/" component={Frontpage} />
            <Route exact path="/about" component={About} />
            <Route exact path="/register" component={Register} />
            <Route component={NotFound} />
        </Switch>
        </BrowserRouter>
    </Provider>
), document.getElementById( 'app' ) );