import React, { useState } from 'react';
import FadeIn from 'react-fade-in';
import Lottie from 'react-lottie';
// import ReactLoading from 'react-loading';
// import 'css/app.css'
import ReactDOM from 'react-dom';
// import "bootstrap/dist/css/bootstrap.css";
import * as loadData from './loadloading.json';
import * as doneData from './doneloading.json';
// import htmlContent from '../views/pages/pagehome.blade.php';
import './Modal.css'

const defaultOptions = {
    loop: true,
    autoplay: true,
    animationData: loadData.default,
    rendererSettings: {
        preserveAspectRatio: "xMidYMid slice"
    }
};

const defaultOptions2 = {
    loop: false,
    autoplay: true,
    animationData: doneData.default,
    rendererSettings: {
        preserveAspectRatio: "xMidYMid slice"
    }
};


export default class Loading extends React.Component {
    constructor(props){
        super(props)
        this.state = {
            loading: undefined,
            done: undefined
        }
    }

    componentDidMount() {
        setTimeout(() => {
          fetch("https://jsonplaceholder.typicode.com/posts")
            .then(response => response.json())
            .then(json => {
                this.setState({ loading: true });
                setTimeout(() => {
                    this.setState({ done: true })
                }, 2000);
            });
        }, 2200);
    }

    render() {
        return (
            <div>
                {!this.state.done ? (
                    <FadeIn>
                    {/* <div class="d-flex justify-content-center align-items-center"> */}
                    {!this.state.loading ? (
                        <div class="container-loading">
                            <div class="card text-center loading">
                            <div class="card-body">
                                <Lottie options={defaultOptions} height={120} width={120} />
                                <p class="card-text">Loading...</p>
                            </div>
                        </div>
                        </div>
                    ) : (
                        <div class="container-loading">
                            <div class="card text-center loading">
                                <div class="card-body ">
                                    <Lottie options={defaultOptions2} height={120} width={120} />
                                    <p class="card-text">Done!</p>
                                </div>
                            </div>
                        </div>
                    )}
                    {/* </div> */}
                </FadeIn>
                ) : (
                    ''
                )}
            </div>
        )
        
    }
}

if (document.getElementById('preloader')) {
    ReactDOM.render(<Loading />, document.getElementById('preloader'));
}
