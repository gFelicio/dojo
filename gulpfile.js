var gulp = require('gulp');
var sass = require('gulp-sass');
var browserSync = require('browser-sync').create();

gulp.task('sass', function()
{
	return gulp.src('resources/assets/sass/**/*.scss')
		.pipe(sass())
		.pipe(gulp.dest('public/css'))
		// .pipe(gulp.dest('public/css/app.css'))
});

gulp.task('watch', ['sass'], function()
{
	gulp.watch('resources/assets/sass/**/*.scss', ['sass']);
});

// @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);* {
//   text-decoration: none;
//   list-style: none;
//   margin: 0;
//   padding: 0;
//   -webkit-box-sizing: border-box;
//           box-sizing: border-box;
//   font-family: Arial,Helvetica,sans-serif;
// }

// body {
//   background-color: #1F8A70;
// }

// .header {
//   height: 45px;
//   background-color: #BEDB39;
// }

// .header ul {
//   display: -webkit-box;
//   display: -ms-flexbox;
//   display: flex;
//   -ms-flex-pack: distribute;
//       justify-content: space-around;
//   -webkit-box-align: center;
//       -ms-flex-align: center;
//           align-items: center;
//   height: 100%;
//   padding-right: 10px;
//   padding-left: 10px;
// }

// .container {
//   padding-top: 50px;
//   text-align: center;
// }

// .container .register div {
//   margin-top: 20px;
// }

// .container .register__button {
//   text-align: center;
// }

// .container .login div {
//   margin-top: 20px;
// }

// .container .login__button {
//   text-align: center;
// }

// .container .products {
//   text-align: center;
// }

// .container .products__item {
//   margin: 5px;
//   margin-top: 10px;
// }

// .container .products__item input[type="file"] {
//   display: none;
// }

// .container__card {
//   display: block;
//   background-color: white;
//   margin: 25px;
//   border-radius: 5px;
//   text-align: left;
//   margin-left: 10px;
//   margin-right: 10px;
//   padding-left: 10px;
//   padding-right: 10px;
//   padding-bottom: 10px;
// }

// .container__card img {
//   width: 100%;
//   margin-top: 10px;
// }

// .container__card__user {
//   margin: 5px;
//   display: -webkit-box;
//   display: -ms-flexbox;
//   display: flex;
//   -webkit-box-align: center;
//       -ms-flex-align: center;
//           align-items: center;
//   -webkit-box-pack: start;
//       -ms-flex-pack: start;
//           justify-content: flex-start;
//   padding-top: 10px;
// }

// .container__card__user > img {
//   max-width: 50px;
//   margin-right: 10px;
//   border-radius: 50px;
// }

// .container__card__info {
//   display: -webkit-box;
//   display: -ms-flexbox;
//   display: flex;
//   align-item: center;
//   -webkit-box-pack: justify;
//       -ms-flex-pack: justify;
//           justify-content: space-between;
// }

// .container__card__info > h3,
// .container__card__info > h4 {
//   display: inline-block;
//   width: auto;
//   padding: 5px 0 5px 0;
// }

// .container__card__info h3 {
//   color: #004358;
// }

// .container__card__info h4 {
//   color: #1F8A70;
// }

// .container__img {
//   width: 40px;
// }

// .container .products__item {
//   margin: 5px;
//   margin-top: 10px;
// }

// hr {
//   margin: 5px;
//   width: 100%;
// }

// input[type="text"],
// input[type="password"] {
//   border-radius: 5px;
// }

// button,
// .button,
// .container .products__item label[for="image"] {
//   border-radius: 5px;
//   padding: 2px;
//   width: 90px;
//   height: 25px;
//   background-color: #BEDB39;
// }


