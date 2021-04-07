import React, {useState} from 'react';
import ReactDOM from 'react-dom';
import './Button.css'
import Loading from './Loading'
// import Button from './Button'


function Example() {
    const [loading, setLoading] = React.useState(false);

    return (
        <button className="btn-login" type="submit" onClick={() => {
            setLoading(true);
            setTimeout(function(){ 
                setLoading(false);
            }, 5000);
            }}>
                {/* { !!loading && <Loading /> } */}
                {loading ? <Loading /> : null }
                SIGN IN
        </button>

        
    );
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
