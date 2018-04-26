import React from 'react';

const Home = ({ test }) => {
    return (
        <div>
            <h1>Test data </h1>
            <section className="text-xl mb-12">
                <p className="mb-8">Test</p>
                <p>
                    <a href="http://ssr.test/react/">test</a>
                </p>
                <form action="/action_page.php" method="get">
                    First name: <input type="text" name="fname" />
                    <br />
                    Last name: <input type="text" name="lname" />
                    <br />
                    <input type="submit" value="Submit" />
                </form>
            </section>
        </div>
    );
};

export default Home;
