// import React, { Component } from "react";
// import Slider from "react-slick";
// // import { baseUrl } from "./config";
// import './BestSeller.css';
// import ReactDOM from 'react-dom';

// export default class HomeSlider extends Component {
//   render() {
//     const settings = {
//       dots: true,
//       autoplay:true,
//       fade: true,
//       infinite: true,
//       speed: 500,
//       slidesToShow: 1,
//       slidesToScroll: 1
//     };
//     return (
//       <div className="container-seller">
//         <Slider {...settings}>
//           <div>
//             <img src={require("./Wallpaper/image1.png")} />
//           </div>
//           <div>
//             <img src={require("./Wallpaper/image2.jpg")}/>
//           </div>
//           <div>
//             <img src={require("./Wallpaper/image3.jpg")} />
//           </div>
//           <div>
//             <img src={require("./Wallpaper/image4.jpg")} />
//           </div>
//         </Slider>
//       </div>
//     );
//   }
// }

// if (document.getElementById('homeslider')) {
//     ReactDOM.render(<HomeSlider />, document.getElementById('homeslider'));
// }

// import AutoplaySlider from 'react-awesome-slider/src/hoc/autoplay/hoc.js';
// import AwesomeSliderStyles from 'react-awesome-slider/src/styled/fold-out-animation/fold-out-animation.scss';
import React, { UseState } from "react";
import ReactDOM from 'react-dom';

import AwesomeSlider from 'react-awesome-slider';
import withAutoplay from 'react-awesome-slider/dist/autoplay';
import 'react-awesome-slider/dist/styles.css';
import './BestSeller.css';
// import Loading from './Loading';
 
function HomeSlider() {
  const  AutoplaySlider = withAutoplay(AwesomeSlider);
  // const [loading, setLoading] = React.useState(false);

    return (
    

      <div className="container-seller mb-5">
        <AutoplaySlider play={true}
            cancelOnInteraction={false} // should stop playing on user interaction
            interval={6000}>
            <div>
            <img className="img-home" src={require("./Wallpaper/image1.png")} />
          </div>
          <div>
            <img className="img-home" src={require("./Wallpaper/image2.jpg")}/>
          </div>
          <div>
            <img className="img-home" src={require("./Wallpaper/image3.jpg")} />
          </div>
          <div>
            <img className="img-home" src={require("./Wallpaper/image4.jpg")} />
          </div>
        </AutoplaySlider>
      </div>
    );
}

if (document.getElementById('homeslider')) {
    ReactDOM.render(<HomeSlider />, document.getElementById('homeslider'));
}