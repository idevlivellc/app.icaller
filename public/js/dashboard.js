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

let liveCall = 0

document.addEventListener('DOMContentLoaded', async (e) => {
	const totalCalls = await get(apiUrl('call-logs?time=today'))

	if (totalCalls.data.length === 0) {
		document.querySelector('[data-received]').innerText = '0'
		document.querySelector('[data-made]').innerText = '0'
		document.querySelector('[data-missed]').innerText = '0'

		document.querySelector('[data-id="call-summary-wrapper"]').innerHTML = `<h2>No recent calls</h2>`

		return
	}

	let received = 0, made = 0, missed = 0

	for (const call of totalCalls.data) {

		switch (call.type) {
			case 'received':
				received += 1
				break;

			case 'made':
					made += 1
					break;

			case 'missed':
				missed += 1
				break;
		
			default:
				break;
		}

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

const callCounter = () => {
	setInterval(async () => {
		const counter = await get(apiUrl('live-calls'))
		document.querySelector('[data-id="live-call"]').innerText = counter
		let avail = 2, busy = 0

		switch (counter) {
			case 1:
				avail = 1
				busy = 1
				break;

			case 2:
				avail = 0
				busy = 2
		
			default:
				break;
		}
		
		document.querySelector('[data-id="agent-available"]').innerText = avail
		document.querySelector('[data-id="agent-busy"]').innerText = busy

	}, 4000);
}

// callCounter()