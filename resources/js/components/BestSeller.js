import React, { Component } from 'react';
import Slider from 'react-slick';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import './BestSeller.css';
import ReactDOM from 'react-dom';

class BestSeller extends Component {
  render() {
    const settings = {
      dots: true,
      autoplay: false,
      infinite: true,
      speedToShow: 3,
      slidesToShow: 4,
      slidesToScroll: 1,
      cssEase: "linear"
    };
    return (
      <div className="container-best-seller carousel">
        <Slider {...settings}>
          <div className="card-wrapper">
            {/* <div className="card"> */}
              <div className="card-image"> <img src={require('./bestseller/clothes1.png')} alt="Credit to Joshua Earle on Unsplash"/></div>
            {/* </div> */}
          </div>
          <div className="card-wrapper">
            {/* <div className="card"> */}
              <div className="card-image"> <img src={require('./bestseller/clothes2.png')} alt="Credit to Joshua Earle on Unsplash"/></div>
            {/* </div> */}
          </div>
          <div className="card-wrapper">
            {/* <div className="card"> */}
              <div className="card-image"> <img src={require('./bestseller/clothes3.png')} alt="Credit to Joshua Earle on Unsplash"/></div>
            {/* </div> */}
          </div>
          <div className="card-wrapper">
            {/* <div className="card"> */}
              <div className="card-image"> <img src={require('./bestseller/clothes4.png')} alt="Credit to Joshua Earle on Unsplash"/></div>
            {/* </div> */}
          </div>
        </Slider>
      </div>
    );
  }
}

export default BestSeller;

if (document.getElementById('bestseller')) {
    ReactDOM.render(<BestSeller />, document.getElementById('bestseller'));
}
