/* global context, dispatch */

import App from './app';
import React from 'react';
import ReactDOMServer from 'react-dom/server';
import { StaticRouter } from 'react-router-dom';

// Compile an initial state
const { data: { packages, test } } = context;

const html = ReactDOMServer.renderToString(
    <div id="app">
        <StaticRouter location={context.url}>
            <App packages={packages} test={test} />
        </StaticRouter>
    </div>
);

dispatch(html);
