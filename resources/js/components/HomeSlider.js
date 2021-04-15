import React, { UseState } from "react";
import ReactDOM from 'react-dom';

import AwesomeSlider from 'react-awesome-slider';
import withAutoplay from 'react-awesome-slider/dist/autoplay';
import 'react-awesome-slider/dist/styles.css';
import './BestSeller.css';
 
function HomeSlider() {
  const  AutoplaySlider = withAutoplay(AwesomeSlider);

    return (
      <div className="container-seller mb-5">
        <AutoplaySlider play={true}
            cancelOnInteraction={false} // should stop playing on user interaction
            interval={6000}>
            <div>
            <img className="img-home" src={require("./Wallpaper/image1.png")} />
          </div>
          <div>
            <img className="img-home" src={require("./Wallpaper/image1.png")}/>
          </div>
          <div>
            <img className="img-home" src={require("./Wallpaper/image1.png")} />
          </div>
          <div>
            <img className="img-home" src={require("./Wallpaper/image1.png")} />
          </div>
        </AutoplaySlider>
      </div>
    );
}

if (document.getElementById('homeslider')) {
    ReactDOM.render(<HomeSlider />, document.getElementById('homeslider'));
}