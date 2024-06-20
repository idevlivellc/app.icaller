const apiUrl = (url) => {
	return 'http://app.icaller.test/api/' + url
}

const get = async (url) => {
	try {
		const response = await fetch (url)
		
		if (!response.ok) throw new Error(`HTTP error! status: ${response.status}`)
		
		const data = await response.json()
		return data
	} catch (error) {
		console.log(error)
	}
}

document.addEventListener('DOMContentLoaded', async (e) => {
	const totalCalls = await get(apiUrl('call-logs?time=today'))

	console.log(totalCalls.data)

	if (totalCalls.data.length === 0) {
		document.querySelector('[data-id="call-summary-wrapper"]').innerHTML = `<h2>No recent calls</h2>`
		return
	}

	for (const call of totalCalls.data) {

		document.querySelector('[data-id="call-summary-table"] tbody').innerHTML += `<tr>
			<td>${call.icon}${call.caller_id}</td>
			<td>${call.number}</td>
			<td>${call.picked_by}</td>
			<td>${call.duration}</td>
			<td>${call.created_at}</td>
		</tr>`
	}

	document.querySelector('[data-received]').innerText = received
	document.querySelector('[data-made]').innerText = made
	document.querySelector('[data-missed]').innerText = missed
})