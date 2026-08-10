# Youn Website V1 Requirements

## Document Status

- Status: Draft for client validation
- Last updated: 2026-08-02
- Source: `plan/clientRequest.md` and follow-up requirements discovery
- Scope: Public outreach website and its administrative content management

## 1. Problem Statement

The organization needs a bilingual public website that keeps Dhivehi- and English-speaking audiences informed about its work, events, event-related and standalone news, Unified podcast episodes, fundraising, galleries, and offline donation options. Authorized staff need to maintain this information without developer assistance. Visitors must be able to discover current organizational activities, give section-specific feedback, contact the organization with donation questions, and request an official receipt after an offline donation.

The first release does not need to process donations online. It needs to clearly present the organization's general donation account details, promote standalone fundraising campaigns and donation opportunities for upcoming events, display manually maintained fundraising progress, provide downloadable proposals, and support donation inquiries and receipt requests.

## 2. Goals

V1 must:

1. Give the public a current source of information about the organization and its activities.
2. Allow visitors to discover published news, events, and Unified podcast episodes.
3. Allow visitors to find offline donation details and submit donation inquiries.
4. Allow authorized administrators to maintain all public-facing content without developer assistance.
5. Provide complete public content in Dhivehi and English through separate language entry links.
6. Allow visitors to browse curated public gallery albums and submit section-specific feedback.
7. Allow companies to request and securely receive receipts for verified offline donations.

## 3. Success Criteria

V1 is successful when:

1. An Admin can create and edit public content through the admin area, and a Super Admin can publish or unpublish it.
2. A visitor can browse published news, events, and Unified podcast episodes without signing in.
3. A visitor can locate the organization's current donation account details.
4. A visitor can discover an open donation opportunity for an upcoming event and download its proposal.
5. A visitor can submit a general, campaign, or event-specific donation inquiry, receive an on-screen confirmation, and have the inquiry both emailed to staff and retained for administrative review.
6. Unpublished content is not accessible through public listings or direct URLs.
7. A visitor can access complete Dhivehi and English versions of every published public section.
8. A visitor can browse published gallery albums and submit feedback for an enabled section.
9. A visitor can view the manually maintained progress of a published standalone campaign or event donation opportunity.
10. A company can submit payment proof, have a Super Admin verify it, and receive a generated receipt by email and private download.

## 4. User Roles

### 4.1 Public Visitor

A public visitor does not need an account. The visitor can:

- View public pages.
- View published news, events, and Unified podcast episodes.
- View donation account details and instructions.
- View event-specific donation opportunities and download their proposals.
- View standalone fundraising campaigns and fundraising progress.
- Browse published Global Gallery albums.
- Submit a general, campaign, or event-specific donation inquiry.
- Submit feedback on sections where feedback is enabled.
- Request a receipt for a general donation, standalone campaign, or event donation opportunity.
- Access the English or Dhivehi version through separate language links.
- Follow podcast links to YouTube and Spotify.

### 4.2 Admin

An Admin must authenticate before accessing the admin area. An Admin can:

- Create and edit draft public-facing content.
- Review retained donation inquiries.
- Review fundraising records, section feedback, and receipt requests.
- Create and edit bilingual fundraising campaigns and Global Gallery albums.
- Manage donation details, inquiry settings, and the promised response-time text.
- Manage other global website settings.

An Admin cannot publish or unpublish content and cannot create, update, promote, demote, disable, or remove administrative users.

### 4.3 Super Admin

A Super Admin has every Admin permission. In addition, a Super Admin can:

- Publish and unpublish public-facing content.
- Create and update Admin and Super Admin accounts.
- Promote an Admin to Super Admin.
- Demote a Super Admin to Admin.
- Enable, disable, and remove Admin and Super Admin accounts.
- Verify or reject offline donation payment proof.
- Generate final receipts for verified donations.

The system must always retain at least one active Super Admin. It must prevent an action that would disable, remove, or demote the last active Super Admin.

## 5. Functional Requirements

### 5.1 Public Website

#### PUB-001 Public Access

The system must allow visitors to access public content without authentication.

Acceptance criteria:

- Given a visitor who is not signed in, when the visitor opens any published public page, then the page is displayed.
- Public access does not grant access to the admin area.

#### PUB-002 Required Sections

The public website must provide the following sections:

- Home
- About
- News
- Events
- Unified podcast
- Donation
- Fundraising
- Global Gallery

Acceptance criteria:

- Each section is reachable through public website navigation.
- Each section provides separate English and Dhivehi entry links.
- Admins and Super Admins can edit the public-facing text and media used by each section.
- An unavailable or unpublished content item is not shown as published content.

#### PUB-003 Publication Rules

Content managed through the admin area must have a draft and published version or state. Only a Super Admin can make draft content publicly available or remove published content from public access.

Acceptance criteria:

- Newly created content remains unavailable to public visitors until a Super Admin publishes it.
- Publishing content makes the approved version publicly available.
- An Admin's changes to already-published content remain pending and do not change the public version until a Super Admin publishes the changes.
- Unpublishing content removes it from public listings and makes its direct public URL unavailable.
- Admins and Super Admins can preview or edit unpublished content from the admin area.

### 5.2 News

#### NEWS-001 News Management

Admins and Super Admins must be able to create and maintain news items. A news item may optionally belong to one event. An event may have any number of related news items. A news item without an event is standalone news.

Each news item must contain:

- Title
- URL identifier
- Summary
- Main content
- Optional related event
- Optional featured image with alternative text
- Publication status
- Publication date

Acceptance criteria:

- An Admin or Super Admin can create, edit, and delete a draft news item.
- Only a Super Admin can publish or unpublish a news item.
- A URL identifier is unique among news items.
- Published news appears in the public news listing.
- A visitor can open a published news item from the listing and read its details.
- News is ordered by publication date, newest first.
- A published event page lists its related published news items.
- Standalone news appears in the public news listing without an event association.
- A news item can be changed between event-related and standalone before publication.
- A news item linked to an unpublished event cannot be published until the event is published or the event association is removed.
- Removing an event does not remove its news; affected news becomes standalone and unpublished until reviewed by a Super Admin.

#### NEWS-002 Highlighted News Countdown

Admins and Super Admins must be able to configure a news item as highlighted and assign a countdown end date and time. Only a Super Admin can publish the highlight.

Acceptance criteria:

- At most one news item is actively highlighted at a time.
- The public website displays the actively highlighted item and its remaining countdown.
- The countdown uses the website's configured time zone.
- When the configured end time is reached, the item automatically stops being highlighted but remains available as ordinary published news.
- An unpublished news item cannot be actively highlighted.

#### NEWS-003 News Gallery

Each news item must have its own optional image gallery, independent of the related event and other news items.

Each gallery image must contain:

- Image
- Alternative text
- Optional caption
- Display order

Acceptance criteria:

- An Admin or Super Admin can add, reorder, caption, replace, and remove gallery images while editing a news item.
- A news item may contain multiple gallery images.
- Gallery image order persists after saving.
- A visitor can browse the gallery on the published news detail page in the configured order.
- A gallery image belongs to exactly one news item and is not automatically copied from or shared with an event gallery.
- Gallery changes to published news do not become public until a Super Admin publishes the pending changes.

### 5.3 Events

#### EVENT-001 Event Management

Admins and Super Admins must be able to create and maintain informational event records.

Each event must contain:

- Title
- URL identifier
- Summary
- Description
- Start date and time
- Optional end date and time
- Location or online-location description
- Optional featured image with alternative text
- Publication status

Acceptance criteria:

- An Admin or Super Admin can create, edit, and delete a draft event.
- Only a Super Admin can publish or unpublish an event.
- A URL identifier is unique among events.
- Published events appear in the public event listing.
- A visitor can open a published event and view its details.
- Upcoming events are ordered by start date, earliest first.
- Past events remain distinguishable from upcoming events.
- V1 does not accept event registrations.

#### EVENT-002 Event-News Relationship

The system must preserve the relationship between events and their related news while also allowing standalone news.

Acceptance criteria:

- An event detail page lists only published news explicitly related to that event.
- A related news item also appears in the general news listing while it is published.
- News belonging to one event does not appear as related news for another event.
- An event can exist without related news.
- A news item can exist without a related event.

### 5.4 Unified Podcast

#### POD-001 Podcast Information

The public website must include a dedicated section that explains and promotes the organization's Unified podcast.

Acceptance criteria:

- Admins and Super Admins can edit the section's introductory text and media.
- Visitors can browse published podcast episodes.

#### POD-002 Episode Management

Admins and Super Admins must be able to create and maintain Unified podcast episodes.

Each episode must contain:

- Title
- Description
- Cover image with alternative text
- Publication date
- YouTube URL
- Spotify URL
- Publication status

Acceptance criteria:

- An Admin or Super Admin can create, edit, and delete a draft episode.
- Only a Super Admin can publish or unpublish an episode.
- Published episodes are ordered by publication date, newest first.
- A visitor can open the episode's YouTube and Spotify destinations.
- YouTube and Spotify values must be valid web URLs before the episode can be saved.
- Unpublished episodes are not visible to public visitors.

### 5.5 Donations

#### DON-001 Offline Donation Details

The donation section must display administratively maintained offline donation instructions and account details.

The donation details must support:

- Account holder name
- Bank name
- Account number
- Optional branch or routing information
- Optional additional payment instructions

Acceptance criteria:

- An Admin or Super Admin can update the donation details without developer assistance.
- Saved changes appear on the public donation section.
- V1 does not collect or process donation payments.
- The website does not ask a donor to report or confirm that a donation was sent.

#### DON-002 General Donation Inquiry Form

The donation section must provide an inquiry form containing:

- Name, required
- Email address, required
- Message, required

Acceptance criteria:

- The system rejects a submission when a required field is empty.
- The system rejects an invalid email-address format.
- After a valid submission, the system stores the inquiry for Admins and Super Admins.
- After a valid submission, the system sends the inquiry to the configured dedicated donations inbox.
- The email includes the submitted name, email address, message, and submission time.
- The system shows the visitor a success confirmation that includes the administratively configured response timeframe.
- A failed submission does not show a success confirmation.
- Duplicate submissions caused by refreshing the success page are not created.

#### DON-003 Donation Inquiry Administration

Admins and Super Admins must be able to review general, campaign, and event-specific donation inquiries.

Acceptance criteria:

- Admins and Super Admins can view an inquiry's type, name, email address, message, and submission time.
- An event-specific inquiry identifies its related event and donation opportunity.
- A campaign inquiry identifies its related standalone fundraising campaign.
- Inquiries are ordered newest first by default.
- Admins and Super Admins can mark an inquiry as open or resolved.
- Donation inquiries are not visible to public visitors.

#### DON-004 Donation Inquiry Settings

Admins and Super Admins must be able to configure:

- The dedicated donations inbox address.
- The response-time text shown after a successful inquiry.

Acceptance criteria:

- The configured inbox must be a valid email address.
- New inquiries are sent to the currently configured inbox.
- The current response-time text is included in the visitor's success confirmation.
- These settings are not displayed publicly except where the response-time text is used in the confirmation.

#### DON-005 Event Donation Opportunities

Admins and Super Admins must be able to create donation opportunities for upcoming events. An event may have zero or more donation opportunities. An opportunity cannot exist without a related event.

Each event donation opportunity must contain:

- Title
- Description
- Target amount
- Current amount raised
- Currency
- Downloadable English proposal document
- Downloadable Dhivehi proposal document
- Inquiry deadline date and time
- Manually open or closed status
- Publication status

Acceptance criteria:

- An Admin or Super Admin can create and edit a draft opportunity from its related event.
- Only a Super Admin can publish or unpublish an opportunity.
- An opportunity can be published only when its related event is published and upcoming.
- A published opportunity appears on its related event page with its title, description, target amount, currency, deadline, status, proposal download, and inquiry action.
- The public opportunity displays its target, current amount raised, and calculated progress percentage.
- An Admin or Super Admin can manually update the verified current amount raised without changing the target.
- The system records who changed the current amount raised, when it changed, and its previous and new values.
- Every public visitor can download the proposal in the selected language without signing in or submitting an inquiry.
- Each language-specific proposal remains associated with exactly one donation opportunity.
- The opportunity automatically stops accepting inquiries when its deadline is reached.
- An Admin or Super Admin can manually close an opportunity before its deadline or reopen it before its deadline.
- An opportunity cannot be reopened after its deadline unless its deadline is moved to a future date.
- A closed opportunity remains publicly identifiable as closed while it and its related event remain published, but it does not accept new inquiries.
- When the related event is no longer upcoming, its opportunities stop accepting inquiries automatically.
- V1 does not collect payments; displayed progress is based only on the manually maintained verified amount.

#### DON-006 Event Donation Opportunity Inquiry

An open, published event donation opportunity must provide an inquiry form containing:

- Name, required
- Email address, required
- Message, required

Acceptance criteria:

- The general inquiry validation and duplicate-submission rules in DON-002 also apply to opportunity inquiries.
- A visitor can submit an inquiry only while the opportunity is published, manually open, before its inquiry deadline, and attached to an upcoming published event.
- After a valid submission, the system stores the inquiry with its related event and donation opportunity.
- After a valid submission, the system sends the inquiry to the configured dedicated donations inbox.
- The email identifies the related event and opportunity and includes the submitted name, email address, message, and submission time.
- The system shows the visitor the same administratively configured response timeframe used for general donation inquiries.
- Submitting an inquiry does not record or imply that a donation was made.

### 5.6 Administrator Management

#### ADMIN-001 Admin Authentication

The admin area must require authentication.

Acceptance criteria:

- An unauthenticated visitor cannot access admin pages or admin data.
- A disabled Admin or Super Admin cannot sign in.
- An enabled Admin or Super Admin can sign in and sign out.
- Authentication does not grant permissions beyond the user's assigned role.

#### ADMIN-002 Admin Account Management

Only Super Admins must be able to manage Admin and Super Admin access.

Acceptance criteria:

- A Super Admin can create an Admin or Super Admin using a name, unique email address, and assigned role.
- A Super Admin can update another administrative user's name and email address.
- A Super Admin can promote an Admin to Super Admin and demote a Super Admin to Admin.
- A Super Admin can disable, re-enable, and remove an Admin or Super Admin.
- The system prevents disabling, removing, or demoting the last active Super Admin.
- An Admin cannot access or perform administrative user-management actions.
- Admin account management is never available to public visitors.

#### ADMIN-003 Public Content Management

Admins and Super Admins must be able to manage the text, links, and media displayed in all required public sections.

Acceptance criteria:

- An Admin or Super Admin can update draft content without editing source code.
- Required fields are validated before changes are saved.
- Content changes persist after the Admin or Super Admin signs out.
- An Admin's changes to published content remain pending and do not alter the public version.

#### ADMIN-004 Publication Control

Only a Super Admin must be able to publish, unpublish, or publish pending changes to public content.

Acceptance criteria:

- An Admin cannot invoke a publication or unpublication action through either the user interface or a direct request.
- A Super Admin can review the pending version before publishing it.
- Publishing pending changes replaces the public version with the reviewed version.
- Unpublishing content removes its public access without deleting its administratively stored content.
- The system records which Super Admin performed each publish or unpublish action and when it occurred.

#### ADMIN-005 Settings Management

Admins and Super Admins must be able to edit global website settings, including donation details, the donations inbox, the feedback inbox, the inquiry response-time text, the website time zone, receipt-generation organization details, and receipt-upload restrictions.

Acceptance criteria:

- An Admin or Super Admin can save valid settings without developer assistance.
- Invalid setting values are rejected with a field-specific error.
- Public settings changes take effect when saved; they do not require a separate publication action.

### 5.7 Bilingual Public Content

#### LANG-001 Translation Coverage

All administrator-authored public content must have complete English and Dhivehi versions. This includes navigation, page content, news, events, Unified podcast content, donation details, fundraising campaigns, event donation opportunities, Global Gallery albums, image alternative text and captions, form labels, validation messages, and visitor confirmations.

Acceptance criteria:

- Admins and Super Admins can enter English and Dhivehi values for every translatable field.
- A Super Admin cannot publish a new item or pending revision while any required English or Dhivehi field is incomplete.
- English content is never displayed as a substitute for missing Dhivehi content, and Dhivehi content is never displayed as a substitute for missing English content.
- User-submitted names, email addresses, messages, feedback, and uploaded documents are retained in the language in which the visitor supplied them and do not require translation.
- A content item's publication state applies to both language versions; one translation cannot be published without the other.

#### LANG-002 Language Access

The website must provide separate English and Dhivehi entry links and preserve the selected language while a visitor navigates public content.

Acceptance criteria:

- The English entry link opens the English version of the website.
- The Dhivehi entry link opens the Dhivehi version of the website.
- Every public page provides a link to the corresponding page in the other language when that page is published.
- Dhivehi public pages use a right-to-left reading direction, while English pages use left-to-right.
- Switching languages keeps the visitor on the equivalent content item or section when one exists.
- Public URLs distinguish the selected language and can be shared directly.

### 5.8 Global Gallery

#### GALLERY-001 Shared Media Library

Admins and Super Admins must be able to maintain a shared media library and reuse media in public content and Global Gallery albums.

Each reusable image must contain:

- Image file
- English alternative text
- Dhivehi alternative text
- Optional English caption
- Optional Dhivehi caption

Acceptance criteria:

- An Admin or Super Admin can upload an image once and select it for more than one content item or album.
- Reusing an image does not create unrelated duplicate media records.
- Media-library images are not public merely because they were uploaded; they become public only through published content or a published album.
- The system identifies where a media item is in use before allowing its removal.
- An in-use media item cannot be removed until it has been removed from all published and draft references.
- Changes to media displayed by published content remain pending until a Super Admin publishes the affected content or album.

#### GALLERY-002 Public Albums

Admins and Super Admins must be able to create curated, bilingual public gallery albums using reusable media.

Each album must contain:

- English and Dhivehi title
- English and Dhivehi description
- Cover image
- Album date
- Ordered collection of one or more images
- Publication status

Acceptance criteria:

- An Admin or Super Admin can create, edit, reorder images in, and delete a draft album.
- Only a Super Admin can publish or unpublish an album.
- A Super Admin cannot publish an album without at least one image and complete English and Dhivehi required fields.
- Published albums appear in the public Global Gallery, ordered by album date, newest first.
- Visitors can open a published album and browse its images in the configured order.
- Album covers, image alternative text, and captions use the visitor's selected language.
- Unpublished albums and media used only by unpublished content are not accessible to public visitors.

### 5.9 Fundraising Campaigns

#### FUND-001 Standalone Campaign Management

Admins and Super Admins must be able to create standalone fundraising campaigns that are not required to belong to an event.

Each campaign must contain:

- English and Dhivehi title
- English and Dhivehi description
- Target amount
- Current amount raised
- Currency
- Start date and time
- End date and time
- Cover image with English and Dhivehi alternative text
- Optional additional reusable media
- Downloadable English proposal document
- Downloadable Dhivehi proposal document
- Manually open or closed status
- Publication status

Acceptance criteria:

- An Admin or Super Admin can create and edit a draft campaign.
- Only a Super Admin can publish or unpublish a campaign.
- A campaign cannot be published unless its required English and Dhivehi content, target, dates, currency, and proposal are complete.
- A published campaign displays its target, current amount raised, calculated progress percentage, dates, status, media, proposal download, and inquiry action.
- Every public visitor can download a published campaign's proposal in the selected language without signing in or submitting an inquiry.
- A campaign automatically stops accepting inquiries when its end date is reached.
- An Admin or Super Admin can manually close a campaign early or reopen it before its end date.
- A campaign cannot be reopened after its end date unless its end date is moved to the future.
- A closed campaign remains publicly identifiable as closed while it remains published.
- V1 does not collect campaign payments online.

#### FUND-002 Manual Progress Updates

Admins and Super Admins must be able to maintain the verified amount raised for standalone campaigns and event donation opportunities.

Acceptance criteria:

- An Admin or Super Admin can enter a non-negative current amount raised in the initiative's configured currency.
- The system calculates progress as the current amount raised divided by the target amount.
- The public progress display updates after a valid amount is saved.
- The current amount may exceed the target; the public display identifies the target as reached and preserves the actual amount and percentage.
- Each update records the acting Admin or Super Admin, time, previous amount, and new amount.
- Receipt approval does not automatically alter fundraising progress.
- Progress is not presented as a transaction ledger or independently audited total.

#### FUND-003 Campaign Inquiry

An open, published standalone campaign must provide an inquiry form with the same fields, validation, storage, email delivery, duplicate prevention, and confirmation behavior defined in DON-002.

Acceptance criteria:

- A campaign inquiry is accepted only while the campaign is published, manually open, and before its end date.
- The stored inquiry identifies the related campaign.
- The staff email identifies the campaign and includes the submitted name, email address, message, and submission time.
- Submitting an inquiry does not record or imply that a donation was made.

### 5.10 Section Feedback

#### FEEDBACK-001 Feedback Availability

Admins and Super Admins must be able to enable or disable feedback independently for public sections and applicable published content, including the Unified podcast section.

Acceptance criteria:

- Feedback is available only where an Admin or Super Admin has enabled it.
- The feedback form automatically identifies the section or content item from which it was opened.
- Disabling feedback prevents new submissions without deleting retained feedback.
- Feedback controls and form text are available in English and Dhivehi.

#### FEEDBACK-002 Feedback Submission

An enabled feedback form must contain:

- Name, required
- Email address, required
- Message, required

Acceptance criteria:

- The system rejects a submission when a required field is empty or the email address is invalid.
- A valid submission stores the name, email address, message, selected language, related section or content item, source URL, and submission time.
- A valid submission is emailed to the one configured feedback inbox.
- The visitor receives a success confirmation in the selected language.
- A failed submission does not show a success confirmation.
- Duplicate submissions caused by refreshing the success page are not created.
- Feedback is never displayed publicly.
- Public feedback forms use automated-submission protection and request throttling.

#### FEEDBACK-003 Feedback Administration

Admins and Super Admins must be able to review retained feedback and configure the feedback inbox.

Acceptance criteria:

- Admins and Super Admins can filter feedback by section or content item, language, status, and submission date.
- Admins and Super Admins can mark feedback as open or resolved.
- The configured feedback inbox must be a valid email address.
- All section feedback emails are sent to the currently configured feedback inbox.
- Feedback data is unavailable to public visitors.

### 5.11 Donation Receipts

#### RECEIPT-001 Company Receipt Request

A company that has made an offline donation must be able to request a receipt for a general donation, standalone fundraising campaign, or event donation opportunity.

The request must contain:

- Company name
- Company registration number
- Company address
- Contact name
- Contact email address
- Donation amount
- Currency
- Donation date
- Donation purpose: general donation, standalone campaign, or event donation opportunity
- Selected campaign or event opportunity when the purpose is initiative-specific
- Payment proof upload

Acceptance criteria:

- Every listed field is required except an initiative selection for a general donation.
- The selected campaign or event opportunity must identify an existing initiative.
- The public initiative selector includes published current and past campaigns or event opportunities but never exposes an unpublished initiative.
- The system rejects invalid email, amount, date, purpose, or payment-proof submissions.
- Payment proof accepts only configured safe document or image formats within the configured file-size limit.
- A valid request is stored with a submitted status and is visible only to Admins and Super Admins.
- The requester receives a submission confirmation in the selected language.
- Submitting a request does not confirm that payment was received and does not update fundraising progress.

#### RECEIPT-002 Verification and Generation

Only a Super Admin may verify payment proof, reject a receipt request, or generate a final receipt.

Acceptance criteria:

- An Admin can review a request but cannot verify, reject, or generate its receipt.
- A Super Admin can mark payment proof as verified or reject the request with a reason.
- A receipt can be generated only after payment proof is verified.
- Rejection records the acting Super Admin, reason, and time and sends the reason to the requester.
- The generated receipt is a PDF with a unique receipt number.
- The receipt contains the organization's configured legal details, company details, donation amount and currency, donation date, donation purpose, related initiative when applicable, issue date, and issuing Super Admin.
- The system records the Super Admin and time for verification, rejection, and generation actions.
- Generating a receipt does not automatically update campaign or event-opportunity progress.

#### RECEIPT-003 Private Receipt Delivery

After generation, the requester must receive an email containing a private link to download the receipt.

Acceptance criteria:

- The download link cannot be discovered through public listings or predictable identifiers.
- The link expires 30 days after it is issued.
- The link provides only the receipt associated with that request.
- An expired or invalid link does not expose the receipt or request details.
- A Super Admin can issue a replacement 30-day link without generating a duplicate receipt.
- The generated receipt remains available to Admins and Super Admins after the requester's link expires.

## 6. Quality and Operational Requirements

### QR-001 Responsive Access

All public pages and required public workflows must be usable on current mobile and desktop screen sizes.

- English and Dhivehi layouts must remain usable at supported mobile and desktop sizes.
- Right-to-left Dhivehi layouts must not obscure, reverse, or truncate controls, amounts, dates, gallery navigation, forms, or download links.

### QR-002 Accessibility

- Interactive controls must be operable by keyboard.
- Form controls must have visible labels.
- Validation errors must identify the affected field and explain the correction needed.
- Informative images must have administratively provided alternative text.
- Links to YouTube and Spotify must have descriptive accessible labels.

### QR-003 Security and Privacy

- All administrative operations require an authenticated, enabled Admin or Super Admin with the required role permission.
- Public visitors must not be able to retrieve donation inquiries or administrative user account data.
- Admins must not be able to publish content or manage Admin and Super Admin accounts by bypassing the administrative interface.
- Passwords must never be stored or displayed as plain text.
- Donation inquiry data must only be used to respond to the inquiry.
- Feedback contact data must only be used to review or respond to the submitted feedback.
- Payment proof, receipt requests, and generated receipts must be accessible only to the requester through a valid private link and to authenticated Admins or Super Admins according to their permissions.
- Payment-proof files must not be exposed through public file URLs.
- Public forms must include reasonable automated-submission protection and request throttling.

### QR-004 Data Integrity

- Public content and translations, news galleries, Global Gallery albums, reusable media, event-news associations, fundraising campaigns, event donation opportunities, administrative accounts, settings, inquiries, feedback, receipt requests, payment proof, and generated receipts must survive application restarts and deployments.
- Deleting or unpublishing one content item must not alter unrelated content.
- Dates and countdowns must be evaluated consistently using one configured website time zone.
- Each event-specific donation inquiry must retain its relationship to the relevant event and opportunity.
- Each campaign inquiry and receipt request must retain its selected campaign or event-opportunity relationship.
- Manual fundraising progress changes and receipt-processing actions must retain their audit history.

### QR-005 Failure Handling

- If inquiry email delivery fails, the stored inquiry must remain available to Admins and Super Admins.
- The system must not claim that an email was delivered when delivery failed.
- If feedback email delivery fails, the stored feedback must remain available to Admins and Super Admins.
- If receipt email delivery fails, the generated receipt must remain available and a Super Admin must be able to resend a new private link.
- Administrative validation failures must preserve entered values and identify the invalid fields.

## 7. V1 Scope Boundary

### 7.1 Included in V1

- Bilingual public home, about, news, events, Unified podcast, donation, fundraising, and Global Gallery sections.
- Separate English and Dhivehi entry links, complete administrator-provided translations, and right-to-left Dhivehi presentation.
- Admin and Super Admin-managed public content and media.
- A reusable media library and curated public gallery albums.
- Optional event relationships for news and standalone news.
- Independently managed multi-image news galleries.
- News highlighting with an expiring countdown.
- Informational event publishing.
- Unified episode publishing with YouTube and Spotify links.
- Offline donation account details.
- Standalone fundraising campaigns and event-specific donation opportunities with manually maintained progress, target amounts, deadlines, public proposal downloads, and open or closed states.
- General, campaign, and event-specific donation inquiry submission, storage, email notification, review, and configurable confirmation timeframe.
- Configurable section feedback that is stored, emailed, and reviewed administratively.
- Company receipt requests with payment-proof upload, Super Admin verification, PDF generation, email notification, and private 30-day download links.
- Admin and Super Admin roles with Super Admin-controlled publishing and user management.

### 7.2 Explicitly Excluded from V1

- Online donation or payment processing.
- Automated donation reconciliation, donor transaction ledgers, or donor reporting.
- Automatic fundraising progress updates from inquiries or receipt requests.
- Receipt requests for individuals; V1 receipt requests are company-based.
- Uploading externally generated final receipts; V1 generates final receipts through the system.
- Event registration forms or attendee management.
- Volunteer opportunities, volunteer profiles, enrollment, membership, or points.
- Certificate generation or distribution.
- Mentorship roles, diagnostic forms, availability, booking, pricing, or payments.
- Automatic or machine-generated translation.
- Public display of submitted feedback.
- Additional editorial roles or permission levels beyond Admin and Super Admin.

These items may be reconsidered only after V1 is operational and a separate requirements analysis validates their users, rules, priority, and constraints.

## 8. Need Hierarchy

### Must Have

1. Admins can prepare and edit all V1 public content, and Super Admins can publish it.
2. Visitors can browse published news, events, and Unified episodes.
3. Visitors can browse standalone news and news related to an event, including each news item's gallery.
4. Visitors can view current offline donation details and event-specific donation opportunities.
5. Visitors can download fundraising proposals and submit general, campaign, or event-specific inquiries that are stored and emailed to staff.
6. Super Admins can publish and unpublish content.
7. Super Admins can manage Admin and Super Admin accounts without allowing the last active Super Admin to be removed.
8. Visitors can access complete English and Dhivehi versions of all public content.
9. Admins can reuse media, and visitors can browse Super Admin-published Global Gallery albums.
10. Visitors can browse standalone campaigns and event opportunities with manually maintained fundraising progress.
11. Visitors can submit feedback for enabled sections; Admins and Super Admins can review it and receive it by email.
12. Companies can request receipts with payment proof; Super Admins can verify and generate receipts delivered through private 30-day links.

### Should Have

1. One news item can be highlighted with an expiry countdown.
2. Admins and Super Admins can track whether donation inquiries are open or resolved.
3. Past and upcoming events are clearly distinguished.

### Could Have Later

- Items listed in section 7.2 after separate validation and prioritization.

## 9. Constraints and Assumptions

### 9.1 Confirmed Constraints

- V1 is public-outreach-first.
- V1 must include an integrated administrative content-management area.
- Public, Admin, and Super Admin access levels must be supported.
- Only Super Admins may publish content or manage administrative users.
- Donations are offline in V1; the website displays general donation details and event-specific donation opportunities and accepts questions.
- News may optionally belong to an event and must support its own image gallery.
- Standalone campaigns and event donation opportunities display manually maintained targets, amounts raised, and calculated progress.
- All administrator-authored public content must be complete in English and Dhivehi before publication.
- Admins provide translations; V1 does not automatically translate content.
- Dhivehi public content uses right-to-left presentation and separate language links.
- Global Gallery media can be reused across content and curated public albums.
- Feedback is enabled per section, stored, and emailed to one configured feedback inbox.
- Receipt requests are for companies, require payment proof, and can be verified and generated only by Super Admins.
- Generated receipt links expire after 30 days.
- No launch date, fixed budget, payment provider, or compliance framework has been specified.

### 9.2 Working Assumptions Requiring Stakeholder Confirmation

The following assumptions make the requirements executable but were not explicitly supplied in the original request:

- News requires a summary, body, publication date, and optional featured image.
- Events require dates, a location description, and an optional featured image.
- A highlighted news item returns to ordinary published-news status when its countdown expires.
- Donation inquiries need open and resolved states for administrative follow-up.
- Donation details consist of common bank-transfer fields and may include additional instructions.
- Event donation opportunities use one English and one Dhivehi proposal document each.
- Standalone fundraising campaigns use one English and one Dhivehi proposal document each.
- A closed opportunity remains visible as closed while its event and the opportunity remain published.
- A closed standalone campaign remains visible while it is published.
- When an event is removed, its related news becomes standalone and unpublished rather than being deleted.
- Admin changes to published content require Super Admin publication before they become public.
- Generated receipts use unique receipt numbers and cannot be silently replaced after issue.
- Generated receipts are English-only unless the organization later confirms a bilingual legal-receipt requirement; this does not affect the bilingual public website requirement.
- The organization must confirm how long feedback, inquiries, payment proof, receipt requests, and generated receipts are retained.
- The organization will provide the dedicated donations and feedback inboxes, bank details, bilingual public copy, gallery media, fundraising proposals, receipt organization details, and configured website time zone before launch.

If a stakeholder rejects an assumption, the affected requirement must be revised before implementation is considered complete.

## 10. Pre-Launch Content and Configuration Checklist

Before public launch, the organization must provide and approve:

- English and Dhivehi Home and About content.
- English and Dhivehi Unified podcast introduction and initial episode details.
- English and Dhivehi initial news and event content.
- Initial news and Global Gallery images with English and Dhivehi captions and alternative text.
- Donation account details and instructions.
- Initial event donation opportunity details, target amounts, deadlines, and proposal documents.
- Initial standalone campaign details, verified starting amounts, dates, media, and proposal documents.
- Dedicated donations inbox address.
- Dedicated feedback inbox address and the sections where feedback is enabled.
- Donation inquiry response-time wording.
- Receipt issuer legal name, address, registration or tax details, receipt numbering starting point, and authorized signatory details.
- Allowed payment-proof formats and maximum file size.
- Data-retention period for inquiries, feedback, payment proof, receipt requests, and generated receipts.
- Website time zone.
- Initial Super Admin account details.
- Required images and their alternative text.

## 11. Definition of V1 Complete

V1 is complete only when all Must Have requirements and their acceptance criteria pass, all required launch content and settings are configured, and every explicitly excluded feature remains outside the release unless this document is formally revised.
