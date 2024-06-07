
function handleSampleError( error ) {
	const issueUrl = 'https://github.com/ckeditor/ckeditor5/issues';

	const message = [
		'Oops, something went wrong!',
		`Please, report the following error on ${ issueUrl } with the build id "82w4kk3eq3k8-q2zxy2h6sgjn" and the error stack trace:`
	].join( '\n' );

	console.error( message );
	console.error( error );
}
