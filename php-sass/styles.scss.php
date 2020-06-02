$container-main-height : 810px;

$cube-front-face : #000000;
$cube-top-face   : #393939;
$cube-side-face  : #272727;

body {
  position: relative;
  margin: 0;
  width: 100%;
  height: auto;
  overflow: hidden;

  #container-outer {
    position: relative;
    display: inline-block;
    top: 100px;
    left: 50%;
    width: $container-main-height;
    height: $container-main-height;
    min-width: $container-main-height;
    min-height: $container-main-height;
    max-width: $container-main-height;
    max-height: $container-main-height;
    transform-origin: top left;
    transform: scale(0.8);

    #container {
      position: absolute;
      display: inline-block;
      top: 0;
      left: -50%;
      width: 100%;
      height: 100%;
      background-color: white;
      overflow: hidden;

      #inner-container {
        position: absolute;
        display: inline-block;
        top: 0%;
        left: 0%;
        width: 100%;
        height: 100%;
        perspective: 2300px;
        transform-style: preserve-3d;
        backface-visibility: visible;
        z-index: 1;

        .define-angle-container {
          position: absolute;
          display: inline-block;
          top: 62%;
          left: 28%;
          width: 16%;
          height: 16%;
          transform: rotateX(-28deg) rotateY(-23deg) rotateZ(-1deg) translateZ(100px);
          transform-origin: bottom;
          backface-visibility: visible;
          transform-style: preserve-3d;
          transition: transform 16000ms;

          .cubes-row {
            position: absolute;
            display: inline-block;
            width: 100%;
            height: 100%;
            transform-origin: bottom;
            backface-visibility: visible;
            transform-style: preserve-3d;

            .cube {
              position: absolute;
              display: inline-block;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              transform-origin: right;
              backface-visibility: visible;
              transform-style: preserve-3d;

              .face {
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                backface-visibility: visible;
                transform-style: preserve-3d;
                border-bottom: solid 3px white;
                border-left: solid 3px white;

                .bar-base {
                  position: relative;
                  width: 26%;
                  height: 26%;
                  backface-visibility: visible;
                  transform-style: preserve-3d;

                  &::before, &::after {
                    content: "";
                    position: absolute;
                    top: 0px;
                    backface-visibility: visible;
                  }

                  &::before {
                    right: 0px;
                    width: 10000%;
                    height: 100%;
                    transform-origin: right;
                    transform: rotateY(-90deg) translateX(70%);
                    border-bottom: solid 3px white;
                  }

                  &::after {
                    left: 0;
                    width: 100%;
                    height: 10000%;
                    transform-origin: top;
                    transform: rotateX(-90deg) translateY(-70%);
                    border-left: solid 3px white;
                  }
                }

                &.face-front {
                  background-color: $cube-front-face;

                  .bar-base {
                    &::before {
                      width: 1700%;
                      transform: rotateY(-90deg) translateX(100%);
                      background-color: $cube-side-face;
                    }

                    &::after {
                      height: 1700%;
                      transform: rotateX(-90deg) translateY(-100%);
                      background-color: $cube-top-face;
                    }
                  }
                }

                &.face-top {
                  transform: rotateX(-90deg) rotateY(0deg) rotateZ(0deg) translateZ(0px);
                  transform-origin: top;
                  background-color: $cube-top-face;

                  .bar-base {
                    &::before {
                      background-color: $cube-side-face;
                    }

                    &::after {
                      background-color: $cube-front-face;
                    }
                  }
                }

                &.face-side {
                  transform: rotateX(0deg) rotateY(-90deg) rotateZ(0deg) translateZ(0px);
                  transform-origin: right;
                  background-color: $cube-side-face;

                  .bar-base {
                    &::before {
                      background-color: $cube-front-face;
                    }

                    &::after {
                      background-color: $cube-top-face;
                    }
                  }
                }
              }

              @for $i from 1 through 7 {
                &.cube-#{$i} {
                  .face {
                    .bar-base {
                      &::before {

                      }

                      &::after {

                      }
                    }

                    &.face-front {
                      background-color: lighten($cube-front-face, $i * 14%);

                      .bar-base {
                        &::before {
                          background: linear-gradient(90deg, rgba(lighten($cube-side-face, $i * 14%), 1) 0%, rgba(lighten($cube-side-face, ($i - 1) * 14%), 1) 100%);
                        }

                        &::after {
                          background: linear-gradient(0deg, rgba(lighten($cube-top-face, $i * 14%), 1) 0%, rgba(lighten($cube-top-face, ($i - 1) * 14%), 1) 100%);
                        }
                      }
                    }

                    &.face-top {
                      background-color: lighten($cube-top-face, $i * 14%);

                      .bar-base {
                        &::before {
                          background-color: lighten($cube-side-face, $i * 14%);
                        }

                        &::after {
                          background-color: lighten($cube-front-face, $i * 14%);
                        }
                      }
                    }

                    &.face-side {
                      background-color: lighten($cube-side-face, $i * 14%);

                      .bar-base {
                        &::before {
                          background-color: lighten($cube-front-face, $i * 14%);
                        }

                        &::after {
                          background-color: lighten($cube-top-face, $i * 14%);
                        }
                      }
                    }
                  }
                }
              }
            }
          }
        }

        &:hover {
          .define-angle-container{
            transform: rotateX(-12deg) rotateY(-14deg) rotateZ(-1deg) translateZ(500px) translateY(-400px);
          }
        }
      }
    }
  }
}