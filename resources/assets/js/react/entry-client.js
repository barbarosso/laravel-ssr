import App from './app';
import React from 'react';
import { render } from 'react-dom';
import { BrowserRouter } from 'react-router-dom';

// Grab the state from a global variable injected into the server-generated HTML
const { data: { packages, test } } = window.__PRELOADED_STATE__;
// Allow the passed state to be garbage-collected
delete window.__PRELOADED_STATE__;

render(
    <BrowserRouter>
        <App packages={packages} test={test} />
    </BrowserRouter>,
    document.getElementById('app')
);
