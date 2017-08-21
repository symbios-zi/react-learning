import React from 'react';
import ReactDOM from 'react-dom';
import { BrowserRouter, Switch, Route } from 'react-router-dom';
import Frontpage from './Containers/Frontpage';
import About from './Containers/About';
import NotFound from './Containers/NotFound';

ReactDOM.render((
    <BrowserRouter>
    <Switch>
        <Route exact path="/" component={Frontpage} />
        <Route exact path="/about" component={About} />
        <Route component={NotFound} />
    </Switch>
    </BrowserRouter>
), document.getElementById( 'app' ) );