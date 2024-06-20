document.addEventListener('DOMContentLoaded', () => {
	
})

const loginForm = document.forms['login-form']
if (typeof loginForm !== 'undefined') {
	loginForm.addEventListener('submit', async (e) => {
		e.preventDefault()
		let check = true
		loginForm['loginBtn'].classList.add('disabled')

		if (!loginForm['email'].value) {
			loginForm['email'].classList.add('invalid')
			check = false
		} else {
			loginForm['email'].classList.remove('invalid')
		}

		if (!loginForm['password'].value) {
			loginForm['password'].classList.add('invalid')
			check = false
		} else {
			loginForm['password'].classList.remove('invalid')
		}

		if (!check) {
			M.toast({
				'html' : '<p>Please fill all the required fields.</p>'
			})
			loginForm['loginBtn'].classList.remove('disabled')
			return
		}

		const response = await fetch(loginForm.action, {
			method : loginForm.method,
			body : new FormData(loginForm),
			headers : {
				'accept' : 'application/json'
			}
		})

		if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`)

		const data = await response.json()

		console.log(data.status)
		
		if (!data.status) {
			for (const key in data.message) {
				loginForm[key].classList.add('invalid')
				M.toast({
					'html' : `<p>${ data.message[key][0] }</p>`
				})
			}
			loginForm['loginBtn'].classList.remove('disabled')
			return
		}

		window.location = data.data


	})
}